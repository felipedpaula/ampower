import icon_marcenaria from "../../../assets/img/Wood.png"
import link_icon from "../../../assets/img/link-icon.png"
import broom from "../../../assets/img/Broom.png"
import rooms from "../../../assets/img/Rooms.png"
import { Header } from "../Header"

export function ServicosResidencia () {
    return (
        <>
        <Header></Header>  

        <div className="center">
            <a href="/">
                <span>{'< Voltar'}</span>
            </a>
        </div>
        
        <div className="center">
            <div className="retangular-card">
                <a href="/servicos/residencia/comodos">
                    <img className="bg-retangular-card" alt="Serviço para casa" src={rooms}/>
                    <div className="bg-gradient"></div>
                    <h3>Cômodos</h3>
                </a>
            </div>
        </div>

        <div className="center">
            <div className="area-tipos-services">
                <h2>Serviços para residência</h2>
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
        </>
    );
}

