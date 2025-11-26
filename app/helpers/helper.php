<?php

if (function_exists ('response_success') === false) {
    function response_success()
    {
        return response()->json(['message' => 'success']);
    }
}
