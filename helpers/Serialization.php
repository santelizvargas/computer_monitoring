<?php

    class Serialization {
        public static function serialize(mixed $data, string $file = 'computers.store'): void 
        {
            try {
                file_put_contents($file, serialize($data));
            } catch(Exception $e) {
                echo $e;
            }
        }

        public static function deserialize(string $file = 'computers.store'): array
        {
            $array = array();

            try {
                $array = unserialize(file_get_contents($file));
            } catch(Exception $e) {
                echo $e;
            }

            return $array;
        }
    }