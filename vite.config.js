import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCtgCJBolnDEgWevMa45G3Q_arWCg1W1x8",
  authDomain: "pfeprojet-47483.firebaseapp.com",
  databaseURL: "https://pfeprojet-47483-default-rtdb.firebaseio.com",
  projectId: "pfeprojet-47483",
  storageBucket: "pfeprojet-47483.appspot.com",
  messagingSenderId: "925070568652",
  appId: "1:925070568652:web:320745d2928a6ffcbea669",
  measurementId: "G-W5BGXEXSJP"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
