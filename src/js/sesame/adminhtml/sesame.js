/*global $,window,$$,QRCode,varienGlobalEvents,Ajax,Event,Element*/
;
(function () {
    'use strict';


    function Sesame() {
        this._$a = {};
        this._config = {};
    }

    Sesame.prototype = {
        domLoaded: function () {
            var self = this;
            self._$a = $('sesameLogin');
            try {
                self._config = JSON.parse(self._$a.readAttribute('data-params'));
            } catch (_Exception) {
                alert('Failed parsing JSON :-(');
                return console.log(_Exception);
            }

            if (self._checkJSON() === true) {
                self._$a.observe('click', self._aClick.bindAsEventListener(self));
            } else {
                alert('JSON invalid. QR Code not available.');
            }
        },

        _checkJSON: function () {
            var isValid = true,
                self = this,
                configUrl = (self._config.url || '').toLowerCase();

            if (configUrl.indexOf('http') === -1) {
                isValid = false;
            }

            if (configUrl.indexOf(window.location.hostname) === -1) {
                isValid = false;
            }

            return isValid;
        },

        _getTimeOut: function () {
            return ~~this._config.url || 120;
        },

        _aClick: function (event) {
            var self = this,
                $qrElement = $('messages');
            event.preventDefault();


            $$('.input-box').each(function (elem) {
                elem.remove();
            });

            $$('.form-buttons')[0].remove();

            var qrCode = new QRCode($qrElement, {
                text: self._config.url,
                width: 220,
                height: 220,
                colorDark: '#000000',
                colorLight: '#ffffff',
                correctLevel: QRCode.CorrectLevel.H
            });

            $qrElement.select('img')[0].setStyle({
                'margin': '0 auto'
            });

            self._$a.update('Code becomes invalid in ' + self._getTimeOut() + ' seconds.'); // @todo maybe remove()
            self._checkLogin();
        },

        _checkLogin: function () {
            var self = this,
                loginSuccessful = false,
                devIterations = 0;

            (function loop() {  // blocking loop.
                setTimeout(function () {

                    // logic here
                    var ar = new Ajax.Request(self._config.checkLoginUrl, {
                        onSuccess: function (response) {
                            console.log('response', response);
                        },
                        method: 'post',
                        parameters: {
                            'token': self._config.token
                        }
                    });


                    if (loginSuccessful === false && devIterations < 5) {
                        loop();
                    }
                    devIterations++;
                }, (~~self._config.checkInterval || 3) * 1000);
            }());
        }
    };

    var sesameObj = new Sesame();

    document.observe('dom:loaded', sesameObj.domLoaded());


}
    ).
    call(function () {
        return this || (typeof window !== 'undefined' ? window : global);
    }());
