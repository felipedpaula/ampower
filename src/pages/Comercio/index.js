import "./styles.css";
import { Header } from "../Inc/Header";
import { Body } from "../Inc/Body";
import { Footer } from "../Inc/Footer";

export function Comercio () {
    return (
        <>
          <Header></Header>  
          
          <div className="center">
              <a href="/">
                  <span>{'< Voltar'}</span>
              </a>
          </div>

          <div className="center">
            Comercio
          </div>
          
          <Footer></Footer>
        </>
    );
}

