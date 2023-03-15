<?php

namespace Database\Seeders;

use App\Models\History as ModelsHistory;
use Illuminate\Database\Seeder;

class History extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dados = [
            [
                "id" => 12,
                "question" => "No filme Guardiões da Galáxia Vol.2. Quill descobre que seu pai verdadeiro está vivo e está em busca dele. Ao final do filme Yondu morre salvando Quill e seus companheiros. Quem é o vilão principal do filme?",
                "difficulty" => "H",
                "rightAnswer" => "Ego",
                "distractionAnswer1" => "Nebulosa",
                "distractionAnswer2" => "Saqueadores",
                "distractionAnswer3" => "Ronan",
                "img" => "Qguardioes2.png",
                "hint" => "Yondu nunca entregou o menino Quill enquanto criança, e Ego estava procurando por seu filho desde então. Ego ensina Quill a manipular o poder Celestial dentro do planeta.",
                "hintIMG" => "guardioes2.png"
            ],
            [
                "id" => 11,
                "question" => "No filme Guardiões da Galáxia Vol I. Em Xandar, Quill convence a Tropa Nova a deter o Aster Escuro antes que chegue à superfície do planeta. A nave é então atacada pelas frotas de Yondu, Quill e os Xandar. Após uma série de derrotas, Ronan é atingido pela nave que Rocket choca dentro da Aster Escuro. Groot se sacrifica para proteger todo o grupo enquanto a nave de Ronan cai no chão. Eles descobrem que Ronan está vivo e que irá eliminar todos os humanos com a Joia do Poder, mas Quill começa a cantar uma música e distrai Ronan. Qual o nome da música cantada por ele?",
                "difficulty" => "H",
                "rightAnswer" => "The Five Stairsteps - O-o-h Child",
                "distractionAnswer1" => "I Want You Back - The Jackson5",
                "distractionAnswer2" => "Ain't no Mountain High Enough - Marvin Gaye & Tammi Terrell",
                "distractionAnswer3" => "Come a Little Bit Closer - Jay and The Americans",
                "img" => "Qguardioes1.png",
                "hint" => "Quill o distrai com uma dança, permitindo a Drax destruir o martelo de guerra de Ronan. Quill pega a Joia do Infinito, e com Gamora, Drax, e Rocket compartilha sua carga de poder, que é então usada para destruir Ronan.",
                "hintIMG" => "guardioes1.png"
            ],
            [
                "id" => 4,
                "question" => "No filme Homem de Ferro, qual o nome usual Tony dá a suas armaduras?",
                "difficulty" => "E",
                "rightAnswer" => "Mark ___ (número da armadura)",
                "distractionAnswer1" => "Máquina de Combate",
                "distractionAnswer2" => "Armadura ___ (número da armadura)",
                "distractionAnswer3" => "Armadura robotizada",
                "img" => "Qhomemdeferro.jpeg",
                "hint" => "Após ser preso no oriente médio e ser obrigado a fazer armas para os inimigos, Tony constrói uma armadura e consegue fugir dessa prisão. Mais tarde Tony refaz esse 'protótipo'e começa a dar nomes para esses projetos, usualmente coloca Mark junto com o número sequencial da armadura em questão.",
                "hintIMG" => "homemdeferro.png"
            ],
            [
                "id" => 13,
                "question" => "No filme Os Vingadores: Era de Ultron. Tony Stark e Bruce Banner descobrem uma inteligência artificial dentro da gema do cetro e, secretamente, usam-na para concluir o programa de defesa global de Stark, denominado Ultron. Inesperadamente Ultron desperta e ao refletir sobre sua missão ele decide que a humanidade deve ser destruída. O que levou Ultron a tomar essa decisão?",
                "difficulty" => "H",
                "rightAnswer" => "Ultron conclui que para se alcançar a paz é necessário destruir a raça humana",
                "distractionAnswer1" => "Por medo de JARVIS, Ultron decide destrui-lo para não existir nenhum robô melhor que ele",
                "distractionAnswer2" => "Ultron decide matar 50% da humanidade para balancear o planeta Terra",
                "distractionAnswer3" => "Ultron queria garantir a segurança da Terra destruindo apenas os heróis",
                "img" => "Qvingadores2.png",
                "hint" => "Ultron ataca, 'destrói' J.A.R.V.I.S. e logo após ataca os Vingadores durante uma festa comemorando a vitória em sua torre. Ultron foge com o cetro para a base da Hidra, onde passa a utilizar os recursos da base de Strucker para evoluir para um corpo melhor e construir um exército de robôs. Ele recruta os gêmeos Maximoff, que possuem um rancor contra Stark por ser o responsável pelo míssil que matou os pais deles.",
                "hintIMG" => "vingadores2.png"
            ],
            [
                "id" => 10,
                "question" => "No filme Capitão América: Soldado Invernal. Steve Rogers reencontra seu antigo amigo que havia sido 'morto' durante o primeiro filme do Capitão América e ele descobre, com Natasha Romanoff e Nick Fury, que a Shield (agência de espionagem), está tomada por uma organização maligna que Steve já havia batalhado em seu primeiro título, a Hidra. Qual era o objetivo da Hidra se infiltrando na agência da Shield?",
                "difficulty" => "M",
                "rightAnswer" => "Semear o caos para a humanidade trocar a liberdade por segurança",
                "distractionAnswer1" => "Destroir o império de heróis e vilões",
                "distractionAnswer2" => "Acabar com a humanidade e selecionar um povo em específico",
                "distractionAnswer3" => "Acabar com grandes líderes dos governos mundiais",
                "img" => "Qcapitaoamerica2.png",
                "hint" => "Após alguns eventos, Steve Rogers descobre a localização de origem de alguns dados, o campo onde ele treinou em Nova Jersey. Lá eles encontram um esconderijo secreto dentro de uma base original da S.H.I.E.L.D. Eles ativam um supercomputador que contém a consciência preservada de Arnim Zola, que revela que desde que a S.H.I.E.L.D. foi fundada após a Segunda Guerra Mundial, a Hidra vem controlando a agência secretamente.",
                "hintIMG" => "capitaoamerica2.png"
            ],
            [
                "id" => 9,
                "question" => "No filme Thor: O Mundo Sombrio. Ao final do filme, Thor, Jane e Loki confrontam os vilões Malekith e Algrim. Após uma série de eventos, Jane estava infectada com o Éter em seu corpo e para remover precisava de uma intervenção de seres capazes de retirar o Éter de seu corpo. Loki tem um plano e o compartilha com Thor, o que ele faz?",
                "difficulty" => "M",
                "rightAnswer" => "Loki Apunhala Thor e entrega Jane a Malekith",
                "distractionAnswer1" => "Loki finge sua morte para que seu irmão consiga derrotar o vilão",
                "distractionAnswer2" => "Thor destrói o planeta quando Jane se liberta do Éter",
                "distractionAnswer3" => "Thor e Loki conseguem uma magia secreta do Pai de Todos para vencer",
                "img" => "Qthor1.png",
                "hint" => "Malekith consegue, de fato, se apoderar do Éter. Thor e Jane deixam o corpo de Loki, após ele ser morto pelo vilão e vão à Terra através de um portal que encontraram. Em Londres, a nave mãe de Malekith estaciona nos jardins do Velho Real Colégio Naval, em Greenwich. É lá o local onde os Nove Reinos irão convergir, e é o ponto onde Malekith pretende usar o poder do Éter para destruir o Universo e fazê-lo voltar a ser pura escuridão. Mas eles conseguem derrubar a nave e derrotar o vilão esmagado por ela.",
                "hintIMG" => "thor1.png"
            ],
            [
                "id" => 3,
                "question" => "No filme O Incrível Hulk, em que local se passa parte da trama?",
                "difficulty" => "E",
                "rightAnswer" => "Brasil",
                "distractionAnswer1" => "Nova York",
                "distractionAnswer2" => "Michigan",
                "distractionAnswer3" => "Texas",
                "img" => "Qhulk.png",
                "hint" => "Após ter se transformado em um incontrolável monstro Bruce Banner tenta achar uma cura e se esconde no Brasil, mais especificamente no Rio de Janeiro.",
                "hintIMG" => "hulk.png"
            ],
            [
                "id" => 5,
                "question" => "No filme Homem de Ferro 2, apareceu um bilionário famoso na vida real. Quem era esse famoso?",
                "difficulty" => "E",
                "rightAnswer" => "Elon Musk",
                "distractionAnswer1" => "Mark Zuckerberg",
                "distractionAnswer2" => "",
                "distractionAnswer3" => "",
                "img" => "Qhomemdeferro2.png",
                "hint" => "Tony Stark vai até Mônaco para representar sua empresa, lá existem vários magnatas ricos e um deles é o Elon Musk que representa o próprio Elon Musk.",
                "hintIMG" => "homemdeferro2.png"
            ],
            [
                "id" => 6,
                "question" => "No filme Thor, qual o nome do local de nascença do herói?",
                "difficulty" => "E",
                "rightAnswer" => "Asgard",
                "distractionAnswer1" => "Midgard",
                "distractionAnswer2" => "",
                "distractionAnswer3" => "",
                "img" => "Qthor.png",
                "hint" => "Thor, filho de Odin, nasceu em Asgard, o reino dos Deuses.",
                "hintIMG" => "thor.png"
            ],
            [
                "id" => 8,
                "question" => "No filme Homem de Ferro 3. O terrorista Mandarim ordena atentados do seu grupo Dez Anéis mundo afora, James Rhodes se torna um soldado de elite do exército americano sob o codinome Patriota de Ferro, Stark está traumatizado pela batalha de Nova York, não conseguindo dormir e assustando Pepper Potts, que se mudou para a mansão dele em Malibu. Quando o segurança Happy Hogan é hospitalizado após uma explosão próxima do Grauman's Chinese Theatre, Stark declara guerra ao Mandarim em rede nacional. Qual o nome do composto utilizado pelos soldados de Mandarim?",
                "difficulty" => "M",
                "rightAnswer" => "Extremis",
                "distractionAnswer1" => "Killian",
                "distractionAnswer2" => "Composto Hot",
                "distractionAnswer3" => "Composto E",
                "img" => "Qhomemdeferro3.png",
                "hint" => "Stark descobre que, após uma série de eventos, a existência de um Mandarim falso para mascarar o verdadeiro e um projeto de soldados infectados com um composto que, se rejeitado pelo corpo, pode explodir a pessoa. Ao final do filme, Stark não consegue salvar Pepper Potts de cair sobre escombros em chamas, mas ele descobre que ela foi salva por esse composto que a mudou para sobreviver em ambientes extremos.",
                "hintIMG" => "homemdeferro3.png"
            ],
            [
                "id" => 1,
                "question" => "No filme Capitão América: O Primeiro Vingador.
Steve Rogers, em um treinamento do exército de corrida, após fazer certa ação, sobressae sobre os companheiros e obtem o privilégio de ir de volta para o alojamento de carona no carro ao invés de ir a pé junto com os companheiros. Que ação ele fez para conseguir esse privilégio?",
                "difficulty" => "E",
                "rightAnswer" => "Conseguiu pegar a bandeira do mastro.",
                "distractionAnswer1" => "Foi o mais rápido durante um tiro (corrida rápida de curta duração).",
                "distractionAnswer2" => "Salvou um companheiro que estava mal de saúde por conta da corrida.",
                "distractionAnswer3" => "Saltou sob uma granada.",
                "img" => "Qcapitao1.png",
                "hint" => "Steve Rogers estava cansado assim como os demais companheiros, pois estavam cumprindo um rigoroso treino de soldado onde todos corriam muitos kilômetros, porém em um determinado momento do percurso o oficial superior dita que quem conseguisse pegar a bandeira que estava hasteada no mastro conseguiria o privilégio de terminar o treino sentado no carro que estava servindo de guia para os soldados. Em um primeiro momento Steve nem chega a tentar, apenas observa seus companheiros brigando tentando subir no mastro, quando todos desistem Steve utiliza de sua inteligência e apenas tira o pino que servia de suporte para o mastro que o mantinha em pé, contrariando todos os colegas que tentaram usar a força bruta e assim pegando a bandeira de forma fácil e obtendo o privilégio de terminar o percurso no carro.",
                "hintIMG" => "capitao1.png"
            ],
            [
                "id" => 2,
                "question" => "No filme Capitã Marvel, Carol Danvers sofre um acidente em um voo de rotina para as forças militares, nesse acidente Carol Danvers consegue ganhar seus poderes e perde a memória. No mesmo instante um 'inimigo' sabendo que ela perdeu a memória recruta ela para seu exército. Qual o nome do exército para o qual Carol foi recrutada?",
                "difficulty" => "E",
                "rightAnswer" => "Exército de Elite Kree.",
                "distractionAnswer1" => "Exército de Elite dos EUA.",
                "distractionAnswer2" => "Exército de Thanos.",
                "distractionAnswer3" => "Exército da Salvação.",
                "img" => "Qcapitamarvel.png",
                "hint" => "O filme inicialmente passa a ideia de que Carol Danvers é Mar-Vell, um membro real do exército Kree, porém após uma missão na Terra, descobriu-se que o passado de Mar-Vell teve sua origem na Terra, que seu nome verdadeiro é Carol Denvers e que na verdade nunca foi parte do exército Kree.",
                "hintIMG" => "capitamarvel.png"
            ],
            [
                "id" => 7,
                "question" => "No filme Os Vingadores, após Nova York ser invadida, quais os nomes dos vingadores que estiveram lutando para impedir que os invasores pegassem o Tesseract?",
                "difficulty" => "M",
                "rightAnswer" => "Homem de Ferro, Capitão América, Viúva Negra, Gavião Arqueiro, Thor e Hulk",
                "distractionAnswer1" => "Homem de Ferro, Hulk, Nick Fury, Loki e Thor.",
                "distractionAnswer2" => "Homem de Ferro, Capitão América, Pantera Negra, Thor e Capitã Marvel.",
                "distractionAnswer3" => "Hulk, Máquina de Combate, Homem Aranha e Homem Formiga.",
                "img" => "Qvingadores1.png",
                "hint" => "Na batalha de Nova York, o exército de Thanos que até então estavam sob ordem de Loki ataca a Terra em busca da joia do infinito no Tesseract. Para deter todo o exército os vingadores são chamados, assim Homem de Ferro, Capitão América, Viúva Negra, Gavião Arqueiro, Thor e Hulk lutam para que essa ameaça seja detida.",
                "hintIMG" => "vingadores1.png"
            ]
        ];



        foreach ($dados as $dado) {
            ModelsHistory::create([
                'id' => $dado['id'],
                'question' => $dado['question'],
                'difficulty' => $dado['difficulty'],
                'rightAnswer' => $dado['rightAnswer'],
                'distractionAnswer1' => $dado['distractionAnswer1'],
                'distractionAnswer2' => $dado['distractionAnswer2'],
                'distractionAnswer3' => $dado['distractionAnswer3'],
                'img' => $dado['img'],
                'hint' => $dado['hint'],
                'hintIMG' => $dado['hintIMG'],
            ]);
        }
    }
}
