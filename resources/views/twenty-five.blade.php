@extends('layouts.plantilla')

@section('title', 'twentyFive')

@section('content')

    <div class="template">
        <div class="up-section">
            <div class="contain-logo">
                <div class="logomd">
                    <img src="./assets/MD.png" alt="logo">
                    <img class="arrow-down" src="./assets/arrow-down.png" alt="arrow back">
                </div>

                <div class="tools" style="display: none;">
                    <div class="arrow-up">
                        <img src="./assets/arrow-down.png" alt="arrow up">
                    </div>
                    <div class="box-tools">
                        <p>Option 1</p>
                        <img src="./assets/shapes.svg" alt="shape-icon">
                    </div>

                    <div class="box-tools">
                        <p>Option 2</p>
                        <img src="./assets/shape-polygong.svg" alt="shape-icon">
                    </div>
                </div>
            </div>

            <div class="contain-buttons">
                <div class="contain-buttons">
                    <button>
                        <i class="fa-solid fa-house" style="color: #dedede;"></i>
                        Nacionales
                    </button>
                    <button>
                        <i class="fa-solid fa-earth-americas" style="color: #dedede;"></i>
                        Internacionales
                    </button>
                </div>
            </div>
        </div>

        <div class="nextOne-section" >
            <div class="table-section">
                <div class="contain-table">
                    <table id="table-campaigns">
                        <thead>
                            <tr>
                                <th>Campañas</th>
                                <th>N° Regístros</th>
                                <th>Regístros nuevos por día</th>
                                <th>Última actualización</th>
                                <th>Veces actualizadas (Día)</th>
                                <th>Próxima actualización</th>
                                <th class="empty"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Campaña 1</td>
                                <td>1370</td>
                                <td>50</td>
                                <td>15:00</td>
                                <td>4</td>
                                <td class="countdown" data-time="10:00">10:00</td>
                                <td></td>
                            </tr>
        
                            <tr>
                                <td>Campaña 2</td>
                                <td>500</td>
                                <td>50</td>
                                <td>15:00</td>
                                <td>3</td>
                                <td class="countdown" data-time="10:00"> 10:00</td>
                                <td></td>
                            </tr>
        
                            <tr>
                                <td>Campaña 3</td>
                                <td>2000</td>
                                <td>100</td>
                                <td>15:00</td>
                                <td>5</td>
                                <td class="countdown" data-time="10:00"> 10:00</td>
                                <td></td>
                            </tr>
        
                            <tr>
                                <td>Campaña 4</td>
                                <td>800</td>
                                <td>30</td>
                                <td>15:00</td>
                                <td>2</td>
                                <td class="countdown" data-time="10:00"> 10:00</td>
                                <td></td>
                            </tr>
        
                            <tr>
                                <td>Campaña 5</td>
                                <td>500</td>
                                <td>20</td>
                                <td>15:00</td>
                                <td>3</td>
                                <td class="countdown" data-time="10:00"> 10:00</td>
                                <td></td>
                            </tr>
        
                            <tr>
                                <td>Campaña 6</td>
                                <td>2000</td>
                                <td>100</td>
                                <td>15:00</td>
                                <td>5</td>
                                <td class="countdown" data-time="10:00"> 10:00</td>
                                <td></td>
                            </tr>
        
                            <tr>
                                <td>Campaña 7</td>
                                <td>800</td>
                                <td>30</td>
                                <td>15:00</td>
                                <td>2</td>
                                <td class="countdown" data-time="10:00"> 10:00</td>
                                <td></td>
                            </tr>
        
                            <tr>
                                <td>Campaña 8</td>
                                <td>2000</td>
                                <td>100</td>
                                <td>15:00</td>
                                <td>5</td>
                                <td class="countdown" data-time="10:00"> 10:00</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Campaña 9</td>
                                <td>2000</td>
                                <td>100</td>
                                <td>15:00</td>
                                <td>5</td>
                                <td class="countdown" data-time="10:00"> 10:00</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Campaña 10</td>
                                <td>2000</td>
                                <td>100</td>
                                <td>15:00</td>
                                <td>5</td>
                                <td class="countdown" data-time="10:00"> 10:00</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Campaña 11</td>
                                <td>2000</td>
                                <td>100</td>
                                <td>15:00</td>
                                <td>5</td>
                                <td class="countdown" data-time="10:00">10:00</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <table id="second-table" style="display: none;">
                        <thead>

                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="settings-section">
                <!-- first section | setting-section -->
                <div class="content-updateAll">
                        <button id="btn-updateAll">Actualizar todo</button>
                </div>
                <!-- first section | setting-section -->

                <!-- second section | setting-section -->
                <div class="content-back-set-del">
                    <div class="between-divs">
                        <div class="content-empty-btn">
                                <button id="update-now">Actualizar ahora</button>
                        </div>
        
                        <div class="content-empty-icons">
                            <div class="container-set-icon">
                                <img id="btn-setting" class="btn-setting" src="./assets/setting.png" alt="setting icon">
                            </div>
                            
                            <div class="container-del-icon">
                                <img class="btn-delete" src="./assets/delete.png" alt="delete icon">
                            </div>

                            <div class="msg-modal-delete" style="display: none;">
                                <p>Selecciona una campaña para eliminar</p>
                                <div class="arrow-delete"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- second section | setting-section -->

                <!-- third section | setting-section -->
                <div class="content-request-btns">
                    <div class="container-title">
                        <p>Registros base de datos</p>
                    </div>

                    <div class="container-bring-register">
                        <p>Traer registros</p>
                    </div>

                    <div class="container-req-btns">
                        <button id="btn-all">50 últimos</button>
                        <button class="get-five">5 últimos</button>
                        <button class="get-ten">10 últimos</button>
                    </div>
                </div>
                <!-- third section | setting-section -->
            </div>
        </div>

        <div class="chart-and-table">
            <div class="section-chart" style="position: relative; height: 50vh; width: 50vw;">
                <canvas id="myGraphic"></canvas>
            </div>

            <div class="section-table-db">
                <table id="database-table">
                    <thead>
                        <th>CAL_ID</th>
                        <th>CAL_CONTACT</th>
                        <th>CAL_AGENT_FN</th>
                        <th>CAL_AGENT_LN</th>
                        <th>CAL_PHONE</th>
                        <th>CAL_CALL_START</th>
                        <th>CAL_CALL_FINISH</th>
                        <th>CAL_CAMPAIGN</th>
                        <th>CAL_QUEUE</th>
                        <th>CAL_TIME_LENGTH</th>
                        <th>CAL_TIME_QUEUE</th>
                        <th>CAL_TIME_SPEAKE</th>
                        <th>CAL_TIME_WRAP</th>
                        <th>CAL_HANGUP</th>
                        <th>CAL_TYPEDOC</th>
                        <th>CAL_DOCUMENTO</th>
                        <th>CAL_MOTIVO</th>
                    </thead>
                    <tbody id="tbody_datos">
                        
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Modal periodicidad -->
        <div class="container-modal" style="display: none;">
            <div class="title-and-form">
                <div class="title-h1">
                    <h1>Periodicidad</h1>
                </div>

                <form id="timeoutForm">
                    <div class="labels-and-inputs">
                        <div class="labels">
                            <label for="days">Días:</label>
                            <label for="hours">Horas:</label>
                            <label for="minutes">Minutos:</label>
                        </div>

                        <div class="inputs">
                            <input type="number" id="days" name="days" placeholder="0" required>
                            <input type="number" id="hours" name="hours" placeholder="0" required>
                            <input type="number" id="minutes" name="minutes" placeholder="0" required>
                        </div>
                    </div>
                    
                    <div class="btn-apply-content">
                        <button id="btn-apply" type="button" onclick="startCustomTimeout()">Aplicar</button>
                    </div>
                </form>
            </div>

            <div class="name-and-inactive">
                <div class="name-campaign">
                    <h1>Campaña 1</h1>
                    <div class="changeName-and-img">
                        <label for="icon-edit">Cambiar nombre</label>
                        <img id="icon-edit" src="./assets/edit.svg" alt="editar nombre">
                    </div>
                </div>

                <div class="content-btn">
                    <button id="inactive-campaign">Desactivar campaña</button>
                </div>
            </div>
        </div>
        <!-- Modal periodicidad -->

        <!-- Modal validacion eliminar campaña -->
        <div class="box-behind" style="display: none;">
            <div class="delete-campaign">
                <h2>¿Desea eliminar la campaña?</h2>
                <div class="box-delete-campaings">
                    <button id="confirm-button">Si</button>
                    <button id="cancel-button">Cancelar</button>
                </div>
            </div>
        </div>
        <!-- Modal validacion eliminar campaña -->
        
    </div>
@endSection()