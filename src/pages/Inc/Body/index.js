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
                        <img className="bg-medium-card" src={house}/>
                        <h3>Residência</h3>
                    </div>
                    <div className="medium-card">
                        <img className="bg-medium-card" src={shop}/>
                        <h3>Comércio</h3>
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
                                <img src={icon_marcenaria} />
                                <span>Marcenaria</span>
                            </div>
                            <button className="link_icon">
                                <img className="link_icon-image" src={link_icon} />
                            </button>
                        </div>

                        <div className="list-item">
                            <div>
                                <img src={broom} />
                                <span>Faxina</span>
                            </div>
                            <button className="link_icon">
                                <img className="link_icon-image" src={link_icon} />
                            </button>
                        </div>
                        
                        <div className="list-item">
                            <div>
                                <img src={icon_marcenaria} />
                                <span>Marcenaria</span>
                            </div>
                            <button className="link_icon">
                                <img className="link_icon-image" src={link_icon} />
                            </button>
                        </div>

                        <div className="list-item">
                            <div>
                                <img src={icon_marcenaria} />
                                <span>Marcenaria</span>
                            </div>
                            <button className="link_icon">
                                <img className="link_icon-image" src={link_icon} />
                            </button>
                        </div>

                        <div className="list-item">
                            <div>
                                <img src={icon_marcenaria} />
                                <span>Marcenaria</span>
                            </div>
                            <button className="link_icon">
                                <img className="link_icon-image" src={link_icon} />
                            </button>
                        </div>

                        <div className="list-item">
                            <div>
                                <img src={icon_marcenaria} />
                                <span>Marcenaria</span>
                            </div>
                            <button className="link_icon">
                                <img className="link_icon-image" src={link_icon} />
                            </button>
                        </div>

                        <div className="list-item">
                            <div>
                                <img src={icon_marcenaria} />
                                <span>Marcenaria</span>
                            </div>
                            <button className="link_icon">
                                <img className="link_icon-image" src={link_icon} />
                            </button>
                        </div>

                        <div className="list-item">
                            <div>
                                <img src={icon_marcenaria} />
                                <span>Marcenaria</span>
                            </div>
                            <button className="link_icon">
                                <img className="link_icon-image" src={link_icon} />
                            </button>
                        </div>
                    </div>

                </div>

            </div>
            
        </body>
    );
}

