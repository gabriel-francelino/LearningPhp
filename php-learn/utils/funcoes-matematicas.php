<?php
// Funções matemáticas

// Função para arredondar um número
echo round(3.2); // 3

// Função para arredondar um número para cima
echo ceil(3.2); // 4

// Função para arredondar um número para baixo
echo floor(3.2); // 3

// Função para gerar um número aleatório
echo rand(1, 10); // 1 a 10

echo mt_rand(0, 100); // mais recomendado a partir do PHP 7.1

// Função divisão inteira
echo intdiv(10, 3); // 3

// Função que retorna o menor valor
echo min(1, 2, 3, 4, 5); // 1

// Função que retorna o maior valor
echo max(1, 2, 3, 4, 5); // 5

// Função para calcular a raiz quadrada
echo sqrt(9); // 3

// Função para calcular a potência
echo pow(2, 3); // 8

// Função para calcular o valor absoluto
echo abs(-10); // 10

// Função para calcular o valor de PI
echo pi(); // 3.1415926535898

// Função para calcular o valor de E
echo M_E; // 2.718281828459

// Função para calcular o valor de logaritmo natural
echo log(10); // 2.302585092994

// Função para calcular o valor de logaritmo na base 10
echo log10(10); // 1

// Função para calcular o valor de exponencial
echo exp(1); // 2.718281828459

/* FUNÇÕES TRIGONOMÉTRICAS */
// Função para calcular o valor de hipotenusa
echo hypot(3, 4); // 5

// Função para calcular o valor de seno
echo sin(30); // -0.98803162409286

// Função para calcular o valor de cosseno
echo cos(30); // 0.15425144988758

// Função para calcular o valor de tangente
echo tan(30); // -6.4053311966463

// Função para calcular o valor de arco seno
echo asin(0.5); // 0.5235987755983

// Função para calcular o valor de arco cosseno
echo acos(0.5); // 1.0471975511966

// Função para calcular o valor de arco tangente
echo atan(0.5); // 0.46364760900081

// Função para converter graus em radianos
echo deg2rad(180); // 3.1415926535898

// Função para converter radianos em graus
echo rad2deg(3.1415926535898); // 180


/* CONVERSAO DE BASES*/
// Função para converter um número de uma base para outra
echo base_convert('10', 10, 2); // 1010

// Função para converter um número em binário
echo decbin(10); // 1010

// Função para converter um número em octal
echo decoct(10); // 12

// Função para converter um número em hexadecimal
echo dechex(10); // a

// Função para converter um número binário em decimal
echo bindec(1010); // 10

// Função para converter um número octal em decimal
echo octdec(12); // 10

// Função para converter um número hexadecimal em decimal
echo hexdec('a'); // 10

// Função para converter um número em formato de moeda
echo number_format(1000); // 1,000

// Função para converter um número em formato de moeda
echo number_format(1000, 2); // 1,000.00

// Função para converter um número em formato de moeda
echo number_format(1000, 2, ',', '.'); // 1.000,00

// Função para converter um número em formato de moeda
echo number_format(1000, 2, '.', ','); // 1,000.00

// Função para converter um número em formato de moeda
echo number_format(1000, 2, '.', ''); // 1000.00

?>