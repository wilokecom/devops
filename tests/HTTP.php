<?php


namespace Tests;


trait HTTP
{
    public function post(array $aArgs)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:8888/wp-admin/admin-ajax.php');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($aArgs));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        $output = curl_exec($ch);

        if (curl_errno($ch)) {
            $errMsg = curl_error($ch);
        }
        curl_close($ch);

        if (isset($errMsg)) {
            return [
                'success' => false,
                'msg' => $errMsg
            ];
        }

        return json_decode($output, true);
    }
}
