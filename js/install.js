document.getElementById("install_app").onclick = function(){
        var request = window.navigator.mozApps.install('http://ebalaskas.gr/ip/manifest/ip.webapp');
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
