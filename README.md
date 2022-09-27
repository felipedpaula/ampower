# ampower
made by Felipe Palmeira.
### Resumo
Back end de sistema escolar simples, utilizando firebase para autentificação e registro de outros dados com o Firestore.

### Bibliotecas necessárias
>- npm install reat-router-dom
>- npm install firebase
>- npm install --save react-firebase-hooks

### Estrutura básica do App
Pastas:
>- pages
>- routes
>- services

#### Routes

>- path: src/routes/AppRoutes.js
~~~javascript
import { BrowserRouter, Route, Routes } from "react-router-dom";
import { Login } from "../pages/Login";
import { Register } from "../pages/Register";

export function AppRoutes() {
  return (
    <BrowserRouter>
      <Routes>
        {/* <Route path="/" element={<Home />} /> */}
        <Route path="/register" element={<Register />} />
        <Route path="/login" element={<Login />} />
      </Routes>
    </BrowserRouter>
  );
}
~~~
#### Services
>- path: src/services/firebaseConfig.js

Configurações encontradas no console do Firebase no projeto.<br>
Visão geral do projeto >> Configurações do projeto >> Seus aplicativos >> Configuração do SDK (NPM)
<br><br>
Aqui exportamos a variável **auth** que carrega os dados de Autentificação da função *getAuth* importada do "firebase/auth".

~~~javascript
import { initializeApp } from "firebase/app";
import { getAuth } from "firebase/auth";
import { getAnalytics } from "firebase/analytics";


// Dados do Firebase
const firebaseConfig = {
  apiKey: "",
  authDomain: "",
  projectId: "",
  storageBucket: "",
  messagingSenderId: "",
  appId: "",
  measurementId: ""
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
export const auth = getAuth(app);
~~~
