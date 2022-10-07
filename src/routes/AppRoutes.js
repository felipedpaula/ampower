import { BrowserRouter, Route, Routes } from "react-router-dom";

import { Login } from "../pages/Login";
import { Register } from "../pages/Register";
import { Home } from "../pages/Home";
import { Comodos } from "../pages/Comodos";
import { Comercio } from "../pages/Comercio";
import { ServicosResidencia } from "../pages/Inc/ServicosResidencia";

export function AppRoutes() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/register" element={<Register />} />
        <Route path="/login" element={<Login />} />
        <Route path="/home" element={<Home />} />

        <Route path="/servicos/residencia" element={<ServicosResidencia />} />
        <Route path="/servicos/residencia/comodos" element={<Comodos />} />
        <Route path="/servicos/comercio" element={<Comercio />} />
      </Routes>
    </BrowserRouter>
  );
}