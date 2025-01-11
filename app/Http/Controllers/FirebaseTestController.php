<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Database;

    class FirebaseTestController extends Controller
    {
        protected $database;

        public function __construct(Database $database)
        {
            $this->database = $database;
        }


        public function testConnection()
        {
            try {
                $reference = $this->database->getReference('test_connection');
                $reference->set([
                    'status' => 'connected',
                    'timestamp' => now()
                ]);

                return response()->json(['message' => 'Connection to Firebase is successful!'], 200);
            } catch (\Exception $e) {
                return response()->json(['message' => 'Failed to connect to Firebase.', 'error' => $e->getMessage()], 500);
            }
        }
    }
