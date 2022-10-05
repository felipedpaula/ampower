import icon_marcenaria from "../../../assets/img/Wood.png"
import link_icon from "../../../assets/img/link-icon.png"
import house from "../../../assets/img/house-dall-e.png"
import shop from "../../../assets/img/shop-dall-e.png"
import broom from "../../../assets/img/Broom.png"

export function Body () {
    return (
        <body>

            <div className="center">

                <div className="place-choice">
                    <div className="medium-card">
                        <a href="/servicos/residencia">
                            <img className="bg-medium-card" alt="Serviço para casa" src={house}/>
                            <div className="bg-gradient"></div>
                            <h3>Residência</h3>
                        </a>
                    </div>
                    <div className="medium-card">
                        <a href="/servicos/comercio">
                            <img className="bg-medium-card" alt="Serviço para estabelecimento" src={shop}/>
                            <h3>Comércio</h3>
                        </a>
                    </div>
                </div>

                <div className="ad-300x250">
                   <span>PUBLICIDADE</span> 
                </div>

                <div className="area-tipos-services">
                    <h2>Encontre o serviço rapidamente</h2>
                    <div className="lista-services">
                        <div className="list-item">
                            <div>
                                <img alt="servico" src={icon_marcenaria} />
                                <span>Marcenaria</span>
                            </div>
                            <button className="link_icon">
                                <img alt="servico" className="link_icon-image" src={link_icon} />
                            </button>
                        </div>

                        <div className="list-item">
                            <div>
                                <img alt="servico" src={broom} />
                                <span>Faxina</span>
                            </div>
                            <button className="link_icon">
                                <img alt="servico" className="link_icon-image" src={link_icon} />
                            </button>
                        </div>
                        
                        <div className="list-item">
                            <div>
                                <img alt="servico" src={icon_marcenaria} />
                                <span>Marcenaria</span>
                            </div>
                            <button className="link_icon">
                                <img alt="servico" className="link_icon-image" src={link_icon} />
                            </button>
                        </div>

                        <div className="list-item">
                            <div>
                                <img alt="servico" src={icon_marcenaria} />
                                <span>Marcenaria</span>
                            </div>
                            <button className="link_icon">
                                <img alt="servico" className="link_icon-image" src={link_icon} />
                            </button>
                        </div>

                        <div className="list-item">
                            <div>
                                <img alt="servico" src={icon_marcenaria} />
                                <span>Marcenaria</span>
                            </div>
                            <button className="link_icon">
                                <img alt="servico" className="link_icon-image" src={link_icon} />
                            </button>
                        </div>

                        <div className="list-item">
                            <div>
                                <img alt="servico" src={icon_marcenaria} />
                                <span>Marcenaria</span>
                            </div>
                            <button className="link_icon">
                                <img alt="servico" className="link_icon-image" src={link_icon} />
                            </button>
                        </div>

                        <div className="list-item">
                            <div>
                                <img alt="servico"  src={icon_marcenaria} />
                                <span>Marcenaria</span>
                            </div>
                            <button className="link_icon">
                                <img alt="servico" className="link_icon-image" src={link_icon} />
                            </button>
                        </div>

                        <div className="list-item">
                            <div>
                                <img alt="servico" src={icon_marcenaria} />
                                <span>Marcenaria</span>
                            </div>
                            <button className="link_icon">
                                <img alt="servico" className="link_icon-image" src={link_icon} />
                            </button>
                        </div>
                    </div>

                </div>

            </div>
            
        </body>
    );
}

