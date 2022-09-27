import { initializeApp } from "firebase/app";
import { getAuth } from "firebase/auth";
import { getAnalytics } from "firebase/analytics";

const firebaseConfig = {
  apiKey: "AIzaSyCloGRlkYPDuVBTkICggS1P7iN1RuErcsE",
  authDomain: "ampower-cc8e0.firebaseapp.com",
  projectId: "ampower-cc8e0",
  storageBucket: "ampower-cc8e0.appspot.com",
  messagingSenderId: "445898319457",
  appId: "1:445898319457:web:2ed872ee060e44c6476c20",
  measurementId: "G-EF12LXN2W8"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

export const auth = getAuth(app);