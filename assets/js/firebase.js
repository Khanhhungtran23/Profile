// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyCtM7eQnHLlBGxeJzjczrOBFUdXBn4RXJk",
    authDomain: "test-kepler-13919.firebaseapp.com",
    projectId: "test-kepler-13919",
    storageBucket: "test-kepler-13919.appspot.com",
    messagingSenderId: "499416834099",
    appId: "1:499416834099:web:d79f51e96440bf761943c8",
    measurementId: "G-3J0EZE1V0"
  };

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);