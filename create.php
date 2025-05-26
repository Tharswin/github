<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Tambah Buku Baru</title>
</head>
<body>
    <div class="container my-5">
        <header class="d-flex justify-content-between my-4">
            <h1>Tambah Buku Baru</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Kembali</a>
            </div>
        </header>

        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="tajukBuku" placeholder="Tajuk buku:" required>
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="pengarang" placeholder="Nama pengarang:" required>
            </div>
            <div class="form-element my-4">
                <select name="jenisBuku" id="jenisBuku" class="form-control" required>
                    <option value="">Pilih Jenis Buku:</option>
                    <option value="Pendidikan Islam">Pendidikan Islam</option>
                    <option value="Sains dan Teknologi">Sains dan Teknologi</option>
                    <option value="Pengembaraan">Pengembaraan</option>
                    <option value="Fiksyen">Fiksyen</option>
                </select>
            </div>
            <div class="form-element my-4">
                <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan buku:"></textarea>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Tambah Buku" class="btn btn-primary">
            </div>
        </form>
    </div>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>