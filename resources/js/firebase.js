// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCEaqHhiWXEjNiMBMbFH_GLKeDMev9F4ls",
  authDomain: "cungcaicode.firebaseapp.com",
  projectId: "cungcaicode",
  storageBucket: "cungcaicode.appspot.com",
  messagingSenderId: "267014102291",
  appId: "1:267014102291:web:c631de84dc5d09d6430ee6",
  measurementId: "G-H17KW6VRW0"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);