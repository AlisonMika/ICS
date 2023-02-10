# confs-apache2
Pasta contendo arquivos de configuração do Apache2 na máquina usada como **servidor web**.

## Funcionamento
Os arquivos criados estão salvos no caminho **/etc/apache2/sites-available**. Em seguida foi se utilizado do comando **a2ensite** para habilitá-lo, tendo uma copia gerada em **/etc/apache2/sites-enabled**.

Acessando então a máquina do cliente com sua interface grafica. Foi adicionado no arquivo em **/etc/hosts** o IP da placa de rede cadastrada na máquina do servidor web e o nome do site se foi cadastrado.

Assim disponibilizando o acesso do Site na maquina do Cliente.
