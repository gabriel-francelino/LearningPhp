<?php 
// $_GET - Array associativo que armazena as variáveis passadas para o script via parâmetros URL
// $_POST - Array associativo que armazena as variáveis passadas para o script via método HTTP POST
// $_REQUEST - Array associativo que armazena as variáveis passadas para o script via método HTTP GET, POST e COOKIE
// $_FILES - Array associativo que armazena os arquivos enviados para o script via método HTTP POST
// $_COOKIE - Array associativo que armazena os cookies enviados para o script via método HTTP
// $_SESSION - Array associativo que armazena as variáveis de sessão disponíveis para o script
// $_SERVER - Array associativo que armazena informações sobre cabeçalhos, caminhos e locais de script
// $_ENV - Array associativo que armazena as variáveis de ambiente disponíveis para o script
// $GLOBALS - Array associativo que armazena todas as variáveis globais disponíveis para o script

/* Ùtil saber */
// getenv() - Retorna o valor de uma variável de ambiente
// setcookie() - Define um cookie para ser enviado juntamente com o resto dos cabeçalhos HTTP
// session_start() - Inicia uma nova sessão ou resume uma sessão existente
// session_destroy() - Destroi todos os dados registrados em uma sessão
// session_unset() - Remove todas as variáveis registradas em uma sessão
// session_id() - Retorna o ID da sessão atual
// session_name() - Retorna ou define o nome da sessão atual
// session_save_path() - Retorna ou define o caminho de salvamento da sessão atual
// session_status() - Retorna o status da sessão atual
// session_cache_expire() - Retorna ou define o tempo de expiração do cache da sessão atual
// session_cache_limiter() - Retorna ou define o limitador de cache da sessão atual
// session_commit() - Fecha a sessão atual
// session_encode() - Codifica os dados da sessão atual como uma string
// session_decode() - Decodifica os dados da sessão atual de uma string
// session_register_shutdown() - Registra uma função para ser executada quando a sessão for fechada
// session_set_cookie_params() - Define os parâmetros do cookie da sessão atual
// session_get_cookie_params() - Retorna os parâmetros do cookie da sessão atual
// session_write_close() - Escreve os dados da sessão atual e a fecha
// session_create_id() - Cria um novo ID de sessão
?>