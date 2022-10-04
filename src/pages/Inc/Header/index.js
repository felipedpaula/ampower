import React from 'react'

import "./styles.css";
import icon_config from "../../../assets/img/Services.png"

export function Header () {
    return (
        <header>
            <div className="center">
                <div className="topo-app">
                    {/* <div className="back"> xx Voltar</div> */}
                    <div className="topo-icon">
                        <img className="topo-icon__img" src={icon_config}/>
                    </div>
                    <h1 className="topo-title">Serviços</h1>
                </div>
            </div>
        </header>
    );
}

