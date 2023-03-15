<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class Questions extends Seeder
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
                "id" => 54,
                "question" => "Quantos estados possui o Brasil?",
                "difficulty" => "E",
                "rightAnswer" => 26,
                "distractionAnswer1" => 27,
                "distractionAnswer2" => 28,
                "distractionAnswer3" => 25,
                "img" => "",
                "theme_fk" => 9
            ],
            [
                "id" => 48,
                "question" => "Qual a raiz cúbica de 8?",
                "difficulty" => "E",
                "rightAnswer" => 2,
                "distractionAnswer1" => 4,
                "distractionAnswer2" => 8,
                "distractionAnswer3" => 6,
                "img" => "",
                "theme_fk" => 8
            ],
            [
                "id" => 55,
                "question" => "Qual o maior país do mundo em território?",
                "difficulty" => "E",
                "rightAnswer" => "Rússia",
                "distractionAnswer1" => "China",
                "distractionAnswer2" => "Brasil",
                "distractionAnswer3" => "Estados Unidos",
                "img" => "",
                "theme_fk" => 9
            ],
            [
                "id" => 56,
                "question" => "Qual o menor país do mundo em território?",
                "difficulty" => "E",
                "rightAnswer" => "Vaticano",
                "distractionAnswer1" => "Mônaco",
                "distractionAnswer2" => "Japão",
                "distractionAnswer3" => "San Marino",
                "img" => "",
                "theme_fk" => 9
            ],
            [
                "id" => 57,
                "question" => "Qual time de futebol é conhecido como 'The Red Devils'?",
                "difficulty" => "M",
                "rightAnswer" => "Manchester United",
                "distractionAnswer1" => "Manchester City",
                "distractionAnswer2" => "Liverpool",
                "distractionAnswer3" => "Bayern München",
                "img" => "",
                "theme_fk" => 2
            ],
            [
                "id" => 58,
                "question" => "Qual motorista ganhou mais campeonatos de Fórmula 1?",
                "difficulty" => "M",
                "rightAnswer" => "Lewis Hamilton",
                "distractionAnswer1" => "Ayrton Senna",
                "distractionAnswer2" => "Sebastian Vettel",
                "distractionAnswer3" => "Fernando Alonso",
                "img" => "",
                "theme_fk" => 2
            ],
            [
                "id" => 59,
                "question" => "De onde é a invenção do chuveiro elétrico?",
                "difficulty" => "E",
                "rightAnswer" => "Brasil",
                "distractionAnswer1" => "Itália",
                "distractionAnswer2" => "França",
                "distractionAnswer3" => "Inglaterra",
                "img" => "",
                "theme_fk" => 5
            ],
            [
                "id" => 60,
                "question" => "Qual o número mínimo de jogadores, em cada time, em uma partida de futebol?",
                "difficulty" => "H",
                "rightAnswer" => 7,
                "distractionAnswer1" => 5,
                "distractionAnswer2" => 8,
                "distractionAnswer3" => 10,
                "img" => "",
                "theme_fk" => 2
            ],
            [
                "id" => 61,
                "question" => "Qual a altura da rede de vôlei nos jogos profissionais masculino e feminino?",
                "difficulty" => "H",
                "rightAnswer" => "2,43 m e 2,24 m",
                "distractionAnswer1" => "2,4 m para ambos",
                "distractionAnswer2" => "2,24 m e 1,98 m",
                "distractionAnswer3" => "2,5 m e 2,0 m",
                "img" => "",
                "theme_fk" => 2
            ],
            [
                "id" => 62,
                "question" => "Quem foi o primeiro homem a pisar na lua?",
                "difficulty" => "E",
                "rightAnswer" => "Neil Armstrong",
                "distractionAnswer1" => "Yuri Gagarin",
                "distractionAnswer2" => "Charles Duke",
                "distractionAnswer3" => "Buzz Aldrin",
                "img" => "",
                "theme_fk" => 5
            ],
            [
                "id" => 63,
                "question" => "Qual tipo sanguíneo é o doador universal?",
                "difficulty" => "E",
                "rightAnswer" => "Tipo O",
                "distractionAnswer1" => "Tipo A",
                "distractionAnswer2" => "Tipo B",
                "distractionAnswer3" => "Tipo AB",
                "img" => "",
                "theme_fk" => 3
            ],
            [
                "id" => 132,
                "question" => "Qual país será campeão da copa do mundo de 2022?",
                "difficulty" => "E",
                "rightAnswer" => "Brasil",
                "distractionAnswer1" => "Argentina",
                "distractionAnswer2" => "Alemanha",
                "distractionAnswer3" => "França",
                "img" => "",
                "theme_fk" => 2
            ],
            [
                "id" => 64,
                "question" => "Qual o livro mais vendido no mundo a seguir à Bíblia?",
                "difficulty" => "M",
                "rightAnswer" => "Dom Quixote",
                "distractionAnswer1" => "O Senhor dos Anéis",
                "distractionAnswer2" => "O Pequeno Príncipe",
                "distractionAnswer3" => "Um Conto de Duas Cidades",
                "img" => "",
                "theme_fk" => 5
            ],
            [
                "id" => 65,
                "question" => "Quantas casas decimais tem o número pi?",
                "difficulty" => "E",
                "rightAnswer" => "Infinitas",
                "distractionAnswer1" => "Duas",
                "distractionAnswer2" => "Milhares",
                "distractionAnswer3" => "Centenas",
                "img" => "",
                "theme_fk" => 8
            ],
            [
                "id" => 133,
                "question" => "Quantos litros de sangue, normalmente, tem no corpo de uma pessoa?",
                "difficulty" => "M",
                "rightAnswer" => "Entre 4 a 6 litros",
                "distractionAnswer1" => "Entre 2 a 4 litros",
                "distractionAnswer2" => "Entre 6 a 8 litros",
                "distractionAnswer3" => "Entre 8 a 10 litros",
                "img" => "",
                "theme_fk" => 3
            ],
            [
                "id" => 67,
                "question" => "Quanto tempo a luz do Sol demora para chegar à Terra?",
                "difficulty" => "E",
                "rightAnswer" => "8 minutos",
                "distractionAnswer1" => "1 dia",
                "distractionAnswer2" => "12 horas",
                "distractionAnswer3" => "12 segundos",
                "img" => "",
                "theme_fk" => 3
            ],
            [
                "id" => 68,
                "question" => "Em que período da pré-história o fogo foi descoberto?",
                "difficulty" => "M",
                "rightAnswer" => "Paleolítico",
                "distractionAnswer1" => "Neolítico",
                "distractionAnswer2" => "Período da Pedra Polida",
                "distractionAnswer3" => "Idade Média",
                "img" => "",
                "theme_fk" => 3
            ],
            [
                "id" => 69,
                "question" => "Qual a montanha mais alta do Brasil?",
                "difficulty" => "M",
                "rightAnswer" => "Pico da Neblina",
                "distractionAnswer1" => "Pico Maior de Friburgo",
                "distractionAnswer2" => "Pico Paraná",
                "distractionAnswer3" => "Monte Roraima",
                "img" => "",
                "theme_fk" => 9
            ],
            [
                "id" => 97,
                "question" => "Qual o nome deste console?",
                "difficulty" => "E",
                "rightAnswer" => "Playstation 1",
                "distractionAnswer1" => "Playstation 2",
                "distractionAnswer2" => "GameCube",
                "distractionAnswer3" => "Nintendo",
                "img" => "console.png",
                "theme_fk" => 6
            ],
            [
                "id" => 98,
                "question" => "Que tipo de roedor é esse?",
                "difficulty" => "E",
                "rightAnswer" => "Rato da mongólia",
                "distractionAnswer1" => "Hamster",
                "distractionAnswer2" => "",
                "distractionAnswer3" => "",
                "img" => "gerbil.jpg",
                "theme_fk" => 3
            ],
            [
                "id" => 24,
                "question" => "Cristiano Ronaldo tem quantas bolas de ouro?",
                "difficulty" => "M",
                "rightAnswer" => 5,
                "distractionAnswer1" => 6,
                "distractionAnswer2" => 4,
                "distractionAnswer3" => 3,
                "img" => "",
                "theme_fk" => 2
            ],
            [
                "id" => 25,
                "question" => "Neymar JR. já ganhou alguma bola de ouro?",
                "difficulty" => "E",
                "rightAnswer" => "Não",
                "distractionAnswer1" => "Sim",
                "distractionAnswer2" => "",
                "distractionAnswer3" => "",
                "img" => "",
                "theme_fk" => 2
            ],
            [
                "id" => 123,
                "question" => "Qual das alternativas é uma linguagem de programação",
                "difficulty" => "M",
                "rightAnswer" => "C#",
                "distractionAnswer1" => "C--",
                "distractionAnswer2" => "Pitan",
                "distractionAnswer3" => "Cabal",
                "img" => "",
                "theme_fk" => 7
            ],
            [
                "id" => 124,
                "question" => "Qual time tem 2 mundiais e apenas 1 libertadores?",
                "difficulty" => "E",
                "rightAnswer" => "Corinthians",
                "distractionAnswer1" => "Santos",
                "distractionAnswer2" => "Flamengo",
                "distractionAnswer3" => "São Paulo",
                "img" => "",
                "theme_fk" => 2
            ],
            [
                "id" => 125,
                "question" => "Qual desses times não tem mundial?",
                "difficulty" => "E",
                "rightAnswer" => "Palmeiras",
                "distractionAnswer1" => "Santos",
                "distractionAnswer2" => "Flamengo",
                "distractionAnswer3" => "São Paulo",
                "img" => "",
                "theme_fk" => 2
            ],
            [
                "id" => 126,
                "question" => "Qual console é considerado o primeiro videogame da história?",
                "difficulty" => "M",
                "rightAnswer" => "Magnavox Odyssey",
                "distractionAnswer1" => "Playstation 1",
                "distractionAnswer2" => "Atari",
                "distractionAnswer3" => "Sega Genesis Mini",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 127,
                "question" => "Quem é o maior artilheiro da Champions League?",
                "difficulty" => "E",
                "rightAnswer" => "Cristiano Ronaldo",
                "distractionAnswer1" => "Messi",
                "distractionAnswer2" => "Pelé",
                "distractionAnswer3" => "Ribamar",
                "img" => "",
                "theme_fk" => 2
            ],
            [
                "id" => 128,
                "question" => "Qual é o jogo eletrônico mais vendido do mundo?",
                "difficulty" => "M",
                "rightAnswer" => "Minecraft",
                "distractionAnswer1" => "Tetris",
                "distractionAnswer2" => "GTA V",
                "distractionAnswer3" => "Wii Sports",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 129,
                "question" => "De qual jogo eletrônico é esse personagem?",
                "difficulty" => "E",
                "rightAnswer" => "GTA",
                "distractionAnswer1" => "Half-Life",
                "distractionAnswer2" => "Portal",
                "distractionAnswer3" => "Minecraft",
                "img" => "cj.png",
                "theme_fk" => 6
            ],
            [
                "id" => 130,
                "question" => "Qual o jogador que, em jogos oficiais, marcou mais gols em um único ano?",
                "difficulty" => "M",
                "rightAnswer" => "Messi",
                "distractionAnswer1" => "Pelé",
                "distractionAnswer2" => "Zico",
                "distractionAnswer3" => "Cristiano Ronaldo",
                "img" => "",
                "theme_fk" => 2
            ],
            [
                "id" => 134,
                "question" => "Qual o maior animal do mundo?",
                "difficulty" => "E",
                "rightAnswer" => "Baleia Azul",
                "distractionAnswer1" => "Tubarão-baleia",
                "distractionAnswer2" => "Lula-colossal",
                "distractionAnswer3" => "Elefante Africano",
                "img" => "",
                "theme_fk" => 3
            ],
            [
                "id" => 135,
                "question" => "Quais os cromossomos que determinam o sexo masculino?",
                "difficulty" => "E",
                "rightAnswer" => "Cromossomos Y",
                "distractionAnswer1" => "Cromossomos X",
                "distractionAnswer2" => "Cromossomos W",
                "distractionAnswer3" => "Cromossomos Z",
                "img" => "",
                "theme_fk" => 3
            ],
            [
                "id" => 136,
                "question" => "Qual das empresas abaixo não é/foi de Elon Musk?",
                "difficulty" => "E",
                "rightAnswer" => "Amazon",
                "distractionAnswer1" => "Paypal",
                "distractionAnswer2" => "Twitter",
                "distractionAnswer3" => "SpaceX",
                "img" => "",
                "theme_fk" => 5
            ],
            [
                "id" => 138,
                "question" => "Quais países da América do Sul não fazem fronteira com o Brasil?",
                "difficulty" => "M",
                "rightAnswer" => "Chile e Equador",
                "distractionAnswer1" => "Guiana e Suriname",
                "distractionAnswer2" => "Guiana e Equador",
                "distractionAnswer3" => "Chile e Suriname",
                "img" => "",
                "theme_fk" => 9
            ],
            [
                "id" => 41,
                "question" => "Quantas patas tem uma formiga?",
                "difficulty" => "E",
                "rightAnswer" => 6,
                "distractionAnswer1" => 4,
                "distractionAnswer2" => 8,
                "distractionAnswer3" => 3,
                "img" => "",
                "theme_fk" => 3
            ],
            [
                "id" => 42,
                "question" => "Qual desses animais tem a maior longevidade?",
                "difficulty" => "E",
                "rightAnswer" => "Tartaruga",
                "distractionAnswer1" => "Golfinho",
                "distractionAnswer2" => "Humano",
                "distractionAnswer3" => "Baleia",
                "img" => "",
                "theme_fk" => 3
            ],
            [
                "id" => 43,
                "question" => "Abelhas comem mel?",
                "difficulty" => "E",
                "rightAnswer" => "Sim",
                "distractionAnswer1" => "Não",
                "distractionAnswer2" => "",
                "distractionAnswer3" => "",
                "img" => "",
                "theme_fk" => 3
            ],
            [
                "id" => 44,
                "question" => "Quantas Copas do Mundo a França possui?",
                "difficulty" => "M",
                "rightAnswer" => 1,
                "distractionAnswer1" => 2,
                "distractionAnswer2" => 0,
                "distractionAnswer3" => 3,
                "img" => "",
                "theme_fk" => 2
            ],
            [
                "id" => 47,
                "question" => "Qual dos 'porque' é usado no final de frases interrogativas",
                "difficulty" => "E",
                "rightAnswer" => "Porquê",
                "distractionAnswer1" => "Por quê",
                "distractionAnswer2" => "Porque",
                "distractionAnswer3" => "Por que",
                "img" => "",
                "theme_fk" => 4
            ],
            [
                "id" => 23,
                "question" => "Com quantos anos a Rainha Elizabeth veio a falecer?",
                "difficulty" => "H",
                "rightAnswer" => 96,
                "distractionAnswer1" => 92,
                "distractionAnswer2" => "",
                "distractionAnswer3" => "",
                "img" => "",
                "theme_fk" => 5
            ],
            [
                "id" => 90,
                "question" => "Qual o nome desse personagem?",
                "difficulty" => "E",
                "rightAnswer" => "Sonic",
                "distractionAnswer1" => "Mario",
                "distractionAnswer2" => "",
                "distractionAnswer3" => "",
                "img" => "sonic.png",
                "theme_fk" => 6
            ],
            [
                "id" => 45,
                "question" => "Qual desses elementos é o melhor condutor elétrico?",
                "difficulty" => "H",
                "rightAnswer" => "Prata",
                "distractionAnswer1" => "Ouro",
                "distractionAnswer2" => "",
                "distractionAnswer3" => "",
                "img" => "",
                "theme_fk" => 3
            ],
            [
                "id" => 51,
                "question" => "Qual o nome do sistema operacional utilizado nos celulares Apple?",
                "difficulty" => "E",
                "rightAnswer" => "iOS",
                "distractionAnswer1" => "SO",
                "distractionAnswer2" => "Android",
                "distractionAnswer3" => "LG",
                "img" => "",
                "theme_fk" => 7
            ],
            [
                "id" => 52,
                "question" => "Qual o nome da ferramenta que tem a ponta em formato de +?",
                "difficulty" => "E",
                "rightAnswer" => "Philips",
                "distractionAnswer1" => "Fenda",
                "distractionAnswer2" => "Sextavada",
                "distractionAnswer3" => "Chave de boca",
                "img" => "",
                "theme_fk" => 7
            ],
            [
                "id" => 53,
                "question" => "Qual o nome do rato do desenho que é dupla de Tom?",
                "difficulty" => "E",
                "rightAnswer" => "Jerry",
                "distractionAnswer1" => "Mickey",
                "distractionAnswer2" => "Ratatouille",
                "distractionAnswer3" => "Rato",
                "img" => "",
                "theme_fk" => 5
            ],
            [
                "id" => 139,
                "question" => "De que time este escudo pertence?",
                "difficulty" => "M",
                "rightAnswer" => "Real Madrid",
                "distractionAnswer1" => "Barcelona",
                "distractionAnswer2" => "Manchester City",
                "distractionAnswer3" => "Villarreal",
                "img" => "realmadrid.png",
                "theme_fk" => 2
            ],
            [
                "id" => 142,
                "question" => "Qual o nome do sistema operacional utilizado nos celulares Xiaomi?",
                "difficulty" => "H",
                "rightAnswer" => "MIUI",
                "distractionAnswer1" => "Android",
                "distractionAnswer2" => "iOS",
                "distractionAnswer3" => "Firefox OS",
                "img" => "",
                "theme_fk" => 7
            ],
            [
                "id" => 143,
                "question" => "Quantos continentes existem no mundo?",
                "difficulty" => "H",
                "rightAnswer" => 6,
                "distractionAnswer1" => 7,
                "distractionAnswer2" => "",
                "distractionAnswer3" => "",
                "img" => "",
                "theme_fk" => 9
            ],
            [
                "id" => 144,
                "question" => "Das seguintes palavras, qual não é um verbo?",
                "difficulty" => "E",
                "rightAnswer" => "Rocha",
                "distractionAnswer1" => "Racha",
                "distractionAnswer2" => "Escrito",
                "distractionAnswer3" => "Pedirá",
                "img" => "",
                "theme_fk" => 4
            ],
            [
                "id" => 140,
                "question" => "Quem é esse Jogador?",
                "difficulty" => "E",
                "rightAnswer" => "Luis Suárez",
                "distractionAnswer1" => "Pelé",
                "distractionAnswer2" => "Ronaldinho",
                "distractionAnswer3" => "Lebron James",
                "img" => "suarez.jpg",
                "theme_fk" => 2
            ],
            [
                "id" => 141,
                "question" => "No jogo eletrônico Portal, desenvolvido pela Valve Corporation, qual o nome do vilão principal da trama?",
                "difficulty" => "H",
                "rightAnswer" => "GLaDOS",
                "distractionAnswer1" => "Destructoid",
                "distractionAnswer2" => "Sentry",
                "distractionAnswer3" => "Wheatley",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 131,
                "question" => "Qual o nome do primeiro console desenvolvido pela empresa Atari?",
                "difficulty" => "H",
                "rightAnswer" => "Atari VCS",
                "distractionAnswer1" => "Atari Lynx",
                "distractionAnswer2" => "Atari 2600",
                "distractionAnswer3" => "Atari Jaguar",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 46,
                "question" => "O que é correto dizer gramaticalmente?",
                "difficulty" => "M",
                "rightAnswer" => "Chuchu",
                "distractionAnswer1" => "Xuxu",
                "distractionAnswer2" => "",
                "distractionAnswer3" => "",
                "img" => "",
                "theme_fk" => 4
            ],
            [
                "id" => 147,
                "question" => "Qual a origem do croissant?",
                "difficulty" => "H",
                "rightAnswer" => "Austríaca",
                "distractionAnswer1" => "Francesa",
                "distractionAnswer2" => "",
                "distractionAnswer3" => "",
                "img" => "croissant.png",
                "theme_fk" => 9
            ],
            [
                "id" => 148,
                "question" => "Quem é esse jogador da NBA?",
                "difficulty" => "M",
                "rightAnswer" => "Stephen Curry",
                "distractionAnswer1" => "Lebron James",
                "distractionAnswer2" => "Kevin Durant",
                "distractionAnswer3" => "Luka Doncic",
                "img" => "stephencurry.png",
                "theme_fk" => 2
            ],
            [
                "id" => 149,
                "question" => "Qual foi o jogo eletrônico responsável pela popularização dos jogos de fazenda?",
                "difficulty" => "H",
                "rightAnswer" => "Harvest Moon",
                "distractionAnswer1" => "Farming Simulator",
                "distractionAnswer2" => "Sim Farm",
                "distractionAnswer3" => "Animal Crossing",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 146,
                "question" => "Dos seguintes verbos, qual é anômalo?",
                "difficulty" => "H",
                "rightAnswer" => "Ser",
                "distractionAnswer1" => "Estar",
                "distractionAnswer2" => "Parecer",
                "distractionAnswer3" => "Medir",
                "img" => "",
                "theme_fk" => 4
            ],
            [
                "id" => 151,
                "question" => "Qual o nome dessa letra grega?",
                "difficulty" => "H",
                "rightAnswer" => "Gamma",
                "distractionAnswer1" => "Alpha",
                "distractionAnswer2" => "Beta",
                "distractionAnswer3" => "Omega",
                "img" => "letragrega.png",
                "theme_fk" => 8
            ],
            [
                "id" => 145,
                "question" => "Das seguintes frases, qual apresenta uso incorreto da posição de pronome?",
                "difficulty" => "M",
                "rightAnswer" => "Direi-vós o testamento",
                "distractionAnswer1" => "Passe-me o sal.",
                "distractionAnswer2" => "Quando nos casamos, choveu.",
                "distractionAnswer3" => "Não se iluda.",
                "img" => "",
                "theme_fk" => 4
            ],
            [
                "id" => 150,
                "question" => "Qual das frases abaixo apresenta uma antítese?",
                "difficulty" => "M",
                "rightAnswer" => "Onde há amor há ódio.",
                "distractionAnswer1" => "Estou ardendo de frio!",
                "distractionAnswer2" => "Se você não ficar feliz, fico triste.",
                "distractionAnswer3" => "Essa comida está tão horrorosa que vou devorar!",
                "img" => "",
                "theme_fk" => 4
            ],
            [
                "id" => 152,
                "question" => "Qual foi o primeiro jogo de fliperama lançado?",
                "difficulty" => "H",
                "rightAnswer" => "Computer Space",
                "distractionAnswer1" => "Pac-Man",
                "distractionAnswer2" => "Pong",
                "distractionAnswer3" => "Space Invaders",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 153,
                "question" => "Qual o maior pontuador da NBA na história?",
                "difficulty" => "H",
                "rightAnswer" => "Kareem Abdul Jabbar",
                "distractionAnswer1" => "Lebron James",
                "distractionAnswer2" => "Michael Jordan",
                "distractionAnswer3" => "Kobe bryant",
                "img" => "",
                "theme_fk" => 2
            ],
            [
                "id" => 155,
                "question" => "Quem é o maior cestinha de 3 pontos da NBA?",
                "difficulty" => "M",
                "rightAnswer" => "Stephen Curry",
                "distractionAnswer1" => "Michael Jordan",
                "distractionAnswer2" => "Lebron James",
                "distractionAnswer3" => "James Harden",
                "img" => "",
                "theme_fk" => 2
            ],
            [
                "id" => 156,
                "question" => "As palavras 'CABUM, BUM, POF, TIQUE-TAQUE e DING DONG' são:",
                "difficulty" => "M",
                "rightAnswer" => "Onomatopeias",
                "distractionAnswer1" => "Interjeições",
                "distractionAnswer2" => "Conjunções",
                "distractionAnswer3" => "Nenhuma das alternativas",
                "img" => "",
                "theme_fk" => 4
            ],
            [
                "id" => 157,
                "question" => "O plural de alemão é:",
                "difficulty" => "E",
                "rightAnswer" => "Alemães",
                "distractionAnswer1" => "Alemãos",
                "distractionAnswer2" => "Alemãs",
                "distractionAnswer3" => "Alemões",
                "img" => "",
                "theme_fk" => 4
            ],
            [
                "id" => 158,
                "question" => "Qual empresa publicou a série de videogame Guitar Hero, em parceria com a Activision?",
                "difficulty" => "H",
                "rightAnswer" => "RedOctane",
                "distractionAnswer1" => "Mad Mimic",
                "distractionAnswer2" => "Flux Games",
                "distractionAnswer3" => "Aquiris",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 137,
                "question" => "No jogo eletrônico Minecraft, desenvolvido pela Mojang Studios, qual o nome dos principais personagens do jogo?",
                "difficulty" => "H",
                "rightAnswer" => "Steve e Alex",
                "distractionAnswer1" => "Ricardo e Eduarda",
                "distractionAnswer2" => "Steve e Bonnie",
                "distractionAnswer3" => "Steve e Bety",
                "img" => "personagens.jpg",
                "theme_fk" => 6
            ],
            [
                "id" => 162,
                "question" => "Qual o nome desse personagem?",
                "difficulty" => "E",
                "rightAnswer" => "Mario",
                "distractionAnswer1" => "Luigi",
                "distractionAnswer2" => "",
                "distractionAnswer3" => "",
                "img" => "mario.png",
                "theme_fk" => 6
            ],
            [
                "id" => 163,
                "question" => "Qual foi o primeiro título do estilo first-person shooter (tiro em primeira pessoa) desenvolvido?",
                "difficulty" => "M",
                "rightAnswer" => "Maze War",
                "distractionAnswer1" => "Doom",
                "distractionAnswer2" => "Wolfenstein 3D",
                "distractionAnswer3" => "Spasim",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 165,
                "question" => "Qual jogo eletrônico foi o precursor moderno dos jogos RTS (estratégia em tempo real)?",
                "difficulty" => "M",
                "rightAnswer" => "The Ancient Art of War",
                "distractionAnswer1" => "Starcraft",
                "distractionAnswer2" => "Age of Mythology",
                "distractionAnswer3" => "Age of Empires",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 166,
                "question" => "Qual a franquia de games mais bem-sucedida (mais unidades vendidas)?",
                "difficulty" => "M",
                "rightAnswer" => "Mario",
                "distractionAnswer1" => "Tetris",
                "distractionAnswer2" => "Pokémon",
                "distractionAnswer3" => "FIFA",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 167,
                "question" => "No jogo eletrônico Bioshock, publicada pela 2K Games, onde o enredo se passa?",
                "difficulty" => "M",
                "rightAnswer" => "Cidade Subaquática",
                "distractionAnswer1" => "Vila",
                "distractionAnswer2" => "Caverna",
                "distractionAnswer3" => "Cidade Litorânea",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 168,
                "question" => "No jogo eletrônico Mario Bros, a princesa Peach é capturada. Qual o nome do vilão que a rapta?",
                "difficulty" => "E",
                "rightAnswer" => "Bowser Koppa",
                "distractionAnswer1" => "Browser Kopa",
                "distractionAnswer2" => "Luigi",
                "distractionAnswer3" => "Amanita",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 170,
                "question" => "Qual o nome do irmão de Mario?",
                "difficulty" => "E",
                "rightAnswer" => "Luigi",
                "distractionAnswer1" => "Marcos",
                "distractionAnswer2" => "Mario Verde",
                "distractionAnswer3" => "Leonardo",
                "img" => "luigi.png",
                "theme_fk" => 6
            ],
            [
                "id" => 169,
                "question" => "No jogo eletrônico God of War 2018, Kratos (personagem principal do jogo) aparece em uma nova mitologia com uma criança que é seu filho. Qual o nome do menino?",
                "difficulty" => "M",
                "rightAnswer" => "Atreus",
                "distractionAnswer1" => "Mateus",
                "distractionAnswer2" => "Marcos",
                "distractionAnswer3" => "Mario",
                "img" => "kratos-atreus.jpeg",
                "theme_fk" => 6
            ],
            [
                "id" => 164,
                "question" => "Qual o nome desse personagem?",
                "difficulty" => "E",
                "rightAnswer" => "Pac-Man",
                "distractionAnswer1" => "Namco",
                "distractionAnswer2" => "Blinky",
                "distractionAnswer3" => "Pinky",
                "img" => "pacman.png",
                "theme_fk" => 6
            ],
            [
                "id" => 175,
                "question" => "Preencha a lacuna a seguir:
_______ foi um MMO criado pela New Horizon Interactive. Os jogadores controlavam pinguins e jogavam em um mundo definido na estação de inverno.",
                "difficulty" => "E",
                "rightAnswer" => "Club Penguin",
                "distractionAnswer1" => "Penguin Diner",
                "distractionAnswer2" => "Super Penguboy",
                "distractionAnswer3" => "Penguin Adventure",
                "img" => "penguin.png",
                "theme_fk" => 6
            ],
            [
                "id" => 176,
                "question" => "Call of Duty é uma franquia de jogos eletrônicos de tiro em primeira pessoa publicado pela Activision. O primeiro título da série foi lançado em 2003. Em qual momento histórico o enredo do primeiro jogo se passa?",
                "difficulty" => "M",
                "rightAnswer" => "Segunda Guerra Mundial",
                "distractionAnswer1" => "Primeira Guerra Mundial",
                "distractionAnswer2" => "Guerra Fria",
                "distractionAnswer3" => "Guerra do Golfo",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 178,
                "question" => "Qual o nome do jogo eletrônico da imagem abaixo?",
                "difficulty" => "E",
                "rightAnswer" => "Team Fortress",
                "distractionAnswer1" => "Overwatch",
                "distractionAnswer2" => "Counter-Strike",
                "distractionAnswer3" => "Valorant",
                "img" => "fortress.png",
                "theme_fk" => 6
            ],
            [
                "id" => 179,
                "question" => "Qual foi o motor de jogo desenvolvido pela Valve Corporation e utilizado no seu primeiro jogo Half-Life?",
                "difficulty" => "M",
                "rightAnswer" => "GoldSource",
                "distractionAnswer1" => "Source",
                "distractionAnswer2" => "Project Source",
                "distractionAnswer3" => "Source 2",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 177,
                "question" => "Qual o nome do jogo eletrônico da imagem abaixo?",
                "difficulty" => "E",
                "rightAnswer" => "Fortnite",
                "distractionAnswer1" => "Bob o Construtor",
                "distractionAnswer2" => "Irmãos à Obra",
                "distractionAnswer3" => "Realm Royale",
                "img" => "fortnite.png",
                "theme_fk" => 6
            ],
            [
                "id" => 180,
                "question" => "Qual o nome desse personagem?",
                "difficulty" => "E",
                "rightAnswer" => "Mega Man",
                "distractionAnswer1" => "Bass",
                "distractionAnswer2" => "Proto Man",
                "distractionAnswer3" => "Roll",
                "img" => "megaman.png",
                "theme_fk" => 6
            ],
            [
                "id" => 181,
                "question" => "No jogo Pac-Man, o objetivo é percorrer um labirinto, comendo pontos, pontos energizantes e frutas. Também é preciso fugir de alguns vilões, quem são eles?",
                "difficulty" => "E",
                "rightAnswer" => "Fantasmas",
                "distractionAnswer1" => "Frutas",
                "distractionAnswer2" => "Pudins",
                "distractionAnswer3" => "Bugs",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 182,
                "question" => "Sonic the Hedgehog é uma série de jogos e uma franquia multimídia japonesa criada pelo Sonic Team e produzida pela Sega. O que significa Sonic?",
                "difficulty" => "E",
                "rightAnswer" => "Sônico",
                "distractionAnswer1" => "Boom",
                "distractionAnswer2" => "Soneca",
                "distractionAnswer3" => "Samba",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 183,
                "question" => "Sonic nasceu em 1991 para o Sega Genesis pensado para concorrer diretamente com a franquia Mario, da Nintendo. Que animal é o Sonic?",
                "difficulty" => "E",
                "rightAnswer" => "Ouriço",
                "distractionAnswer1" => "Porco-espinho",
                "distractionAnswer2" => "",
                "distractionAnswer3" => "",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 184,
                "question" => "Lançado em 1973 pela japonesa Taito. Criado por Tomohiro Nishikado, o jogo foi lançado para fliperama, com muitas limitações. Aquele que é considerado o primeiro jogo de futebol da história dos videogames foi:",
                "difficulty" => "E",
                "rightAnswer" => "Soccer",
                "distractionAnswer1" => "FIFA I",
                "distractionAnswer2" => "EFootball",
                "distractionAnswer3" => "Bomba Patch",
                "img" => "",
                "theme_fk" => 6
            ],
            [
                "id" => 189,
                "question" => "Qual relíquia, guardada em Portugal, veio para o Brasil apenas para a comemoração do bicentenário da Independência?",
                "difficulty" => "M",
                "rightAnswer" => "coração de D. Pedro I",
                "distractionAnswer1" => "a insígnia portuguesa que D. Pedro I usava quando proclamou a Independência",
                "distractionAnswer2" => "a espada de D. Pedro I",
                "distractionAnswer3" => "a indumentária que D. Pedro I usava em 7 de setembro de 1822",
                "img" => "",
                "theme_fk" => 5
            ],
            [
                "id" => 190,
                "question" => "Qualquer número elevado a zero é igual a:",
                "difficulty" => "E",
                "rightAnswer" => 1,
                "distractionAnswer1" => 0,
                "distractionAnswer2" => "Infinito",
                "distractionAnswer3" => "Sem resultado",
                "img" => "",
                "theme_fk" => 8
            ],
            [
                "id" => 191,
                "question" => "É um teorema da geometria que afirma que, num plano, a interseção de retas paralelas, por retas transversais, formam segmentos proporcionais. Seu nome é:",
                "difficulty" => "H",
                "rightAnswer" => "Teorema de Tales",
                "distractionAnswer1" => "Teorema das quatro cores",
                "distractionAnswer2" => "Teorema da Incompletude de Gödel",
                "distractionAnswer3" => "Teorema Fundamental da Álgebra",
                "img" => "",
                "theme_fk" => 8
            ],
            [
                "id" => 186,
                "question" => "Quanto é (1000*75384/700 + 15942) * 0?",
                "difficulty" => "E",
                "rightAnswer" => 0,
                "distractionAnswer1" => 1895424,
                "distractionAnswer2" => 7231812,
                "distractionAnswer3" => 1,
                "img" => "",
                "theme_fk" => 8
            ],
            [
                "id" => 187,
                "question" => "Quem foi o primeiro matemático do mundo?",
                "difficulty" => "H",
                "rightAnswer" => "Tales de Mileto",
                "distractionAnswer1" => "Narmer Macehead",
                "distractionAnswer2" => "Gottfried Wilhelm",
                "distractionAnswer3" => "Arquimedes",
                "img" => "",
                "theme_fk" => 8
            ],
            [
                "id" => 188,
                "question" => "O quadrado da hipotenusa é igual à soma dos quadrados dos catetos. Qual o nome desse Teorema?",
                "difficulty" => "M",
                "rightAnswer" => "Teorema de Pitágoras",
                "distractionAnswer1" => "Teorema de Tales",
                "distractionAnswer2" => "Teorema do Limite Central",
                "distractionAnswer3" => "Teorema de Fermat",
                "img" => "",
                "theme_fk" => 8
            ],
            [
                "id" => 194,
                "question" => "Qual das alternativas apresenta os Presidentes do Brasil em ordem de sucessão?",
                "difficulty" => "E",
                "rightAnswer" => "Dilma Rousseff, Michel Temer, Jair Bolsonaro",
                "distractionAnswer1" => "Lula, Dilma Rousseff, Jair Bolsonaro",
                "distractionAnswer2" => "Dilma Rousseff, Lula, Jair Bolsonaro",
                "distractionAnswer3" => "Collor, Lula, Jair Bolsonaro",
                "img" => "",
                "theme_fk" => 5
            ],
            [
                "id" => 346,
                "question" => "quantos kilobytes tem em um megabyte ?",
                "difficulty" => "E",
                "rightAnswer" => 1024,
                "distractionAnswer1" => 1000,
                "distractionAnswer2" => 1240,
                "distractionAnswer3" => 1004,
                "img" => "",
                "theme_fk" => 7
            ],
            [
                "id" => 193,
                "question" => "Quais os nomes dos vencedores do Nobel da Paz e da Literatura de 2022?",
                "difficulty" => "H",
                "rightAnswer" => "Nobel da Paz: Ales Bialiatski e as organizações Memorial e Centro para Liberdades Civis; Nobel de Literatura: Annie Ernaux",
                "distractionAnswer1" => "Nobel da Paz: Programa Alimentar Mundial; Nobel de Literatura: Louise Glück",
                "distractionAnswer2" => "Nobel da Paz: Abiy Ahmed Ali; Nobel de Literatura: Peter Handke",
                "distractionAnswer3" => "Nobel da Paz: Malala Yousafzai; Nobel de Literatura: Bob Dylan",
                "img" => "",
                "theme_fk" => 5
            ],
            [
                "id" => 196,
                "question" => "Quais destes acontecimentos faz 10 e 30 anos em 2022?",
                "difficulty" => "M",
                "rightAnswer" => "RIO+20 e Eco-92",
                "distractionAnswer1" => "Massacre do Carandiru e RIO+20",
                "distractionAnswer2" => "Fim da Guerra no Golfo e Coroação de Dom Pedro II no Brasil",
                "distractionAnswer3" => "Massacre do Carandiru e Impeachment de Fernando Collor",
                "img" => "",
                "theme_fk" => 5
            ],
            [
                "id" => 197,
                "question" => "Qual dos 'porque' é usado em respostas?",
                "difficulty" => "E",
                "rightAnswer" => "Porque",
                "distractionAnswer1" => "Por quê",
                "distractionAnswer2" => "Por que",
                "distractionAnswer3" => "Porquê",
                "img" => "",
                "theme_fk" => 4
            ],
            [
                "id" => 200,
                "question" => "Qual destas frases foi dita pelo Papa Francisco em 2022?",
                "difficulty" => "M",
                "rightAnswer" => "“Não se pode dar a paz se não se está em paz”",
                "distractionAnswer1" => "Se Deus é brasileiro, o Papa é carioca.",
                "distractionAnswer2" => "Brasil acima de tudo, Deus acima de todos.",
                "distractionAnswer3" => "Ter fé é assinar uma folha em branco e deixar que Deus nela escreva o que quiser.",
                "img" => "",
                "theme_fk" => 5
            ],
            [
                "id" => 204,
                "question" => "Em 2022 faz 10 anos do falecimento de que astronauta importante?",
                "difficulty" => "E",
                "rightAnswer" => "Neil Armstrong",
                "distractionAnswer1" => "Marcos Pontes",
                "distractionAnswer2" => "Valentina Tereshkova",
                "distractionAnswer3" => "Iuri Gagarin",
                "img" => "",
                "theme_fk" => 5
            ],
            [
                "id" => 203,
                "question" => "São exemplos de artigos indefinidos:",
                "difficulty" => "E",
                "rightAnswer" => "um, uma",
                "distractionAnswer1" => "o, a",
                "distractionAnswer2" => "ele, ela",
                "distractionAnswer3" => "nós, vós",
                "img" => "",
                "theme_fk" => 4
            ]
        ];



        foreach ($dados as $dado) {
            Question::create([
                'question' => $dado['question'],
                'difficulty' => $dado['difficulty'],
                'rightAnswer' => $dado['rightAnswer'],
                'distractionAnswer1' => $dado['distractionAnswer1'],
                'distractionAnswer2' => $dado['distractionAnswer2'],
                'distractionAnswer3' => $dado['distractionAnswer3'],
                'img' => $dado['img'],
                'theme_fk' => $dado['theme_fk']
            ]);
        }
    }
}
