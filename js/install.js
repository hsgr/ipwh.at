document.getElementById("install_app").onclick = function(){
        var request = window.navigator.mozApps.install('http://ipwh.at/ip.webapp');
        request.onsuccess = function () {
                // Save the App object that is returned
                var appRecord = this.result;
                alert('Installation successful!');
        };
        request.onerror = function () {
                // Display the error information from the DOMError object
                alert('Install failed, error: ' + this.error.name);
        };
}

$(document).ready(function() {
        $.ajax({
                type: 'GET',
                url: 'http://ipwh.at/checks.php',
                dataType: 'jsonp',
                jsonp: 'tr',
                success: function(data) {
                        $('#trace').empty();
                        $.each( data, function(k, v){
                                $('#trace').append('<p class="terminal-line">' + v + '</p>');
                        });
                }
        });
});