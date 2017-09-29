<?php

class Connection {

    public static function make($config) {
        try {
            return new PDO(
                $config['host'] . ';' . $config['dbname'],
                $config['user'],
                $config['pass']
            );
        } catch (Exception $e) {
            die('Error ' . $e->getMessage());
        }
    }
}