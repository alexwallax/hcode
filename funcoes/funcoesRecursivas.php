<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Inicio: Diretor Inicial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                     //Inicio: Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    //Termino: Gerente de Vendas
                )
            ),
            //Termino: Diretor Comercial       
            //Inicio: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //Início: Gerente de contas a pagar
                    array(
                        'nome_cargo' => 'Gerente de contas a pagar',
                        'subordinados' => array(
                        //Início: Supervisor de pagamentos
                        array(
                            'nome_cargo' => 'Supervisor de Pagamentos'
                        )  
                        //Termino: Supervisor de pagamentos     
                        )
                    ),
                    //Termino: Gerente de contas a pagar
                    //Início: Gerente de a compras
                    array(
                        'nome_cargo' => 'Gerente de a compras',
                        'subordinados' => array(
                            //Início: supervisor de suprimentos
                            array(
                                'nome_cargo' => 'supervisor de Suprimentos',
                                'subordinados' => array(
                                    
                                    array(
                                        'nome_cargo' => 'Funcionario'
                                    )
                                    
                                )
                            )
                            //termino: supervisor de suprimentos
                        )
                    )
                    //Termino: Gerente de a compras
                )
            )
            //Termino: Diretor Financeiro
        )
    )
    
    
);

function exibe($cargos) {
    
    $html = '<ul>';
    
    foreach ($cargos as $cargo) {
        
        $html .= "<li>";
        
        $html .= $cargo['nome_cargo'];
        
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            
            $html .= exibe($cargo['subordinados']);
            
        }
        
        $html .= "</li>";
        
    }
    
    $html .= '</ul>'; 
    
    return $html;
    
}

echo exibe($hierarquia);

?>
