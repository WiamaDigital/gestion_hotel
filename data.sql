-- Active: 1666097427793@@127.0.0.1@3306@gt_hotel

CREATE DATABASE gt_hotel;

use gt_hotel;

-----------------------Data of Inscription

--

-- Table  `user_form`

--

DROP table IF EXISTS user_form;

CREATE
or
REPLACE
TABLE
    user_form(
        id_user int PRIMARY key AUTO_INCREMENT,
        username VARCHAR(50) NOT NULL,
        mail_user VARCHAR(200) NOT null,
        pass_user varchar(50)
    ) AUTO_INCREMENT = 1;

SELECT * from user_form;

--

-- Table `admin_form`

--

DROP TABLE if EXISTS admin_form;

CREATE
or
REPLACE
Table
    admin_form(
        id_admin int PRIMARY KEY AUTO_INCREMENT,
        name varchar(30) NOT NULL,
        uname VARCHAR(50) not NULL,
        upass VARCHAR(50) not null
    ) AUTO_INCREMENT = 1;

INSERT INTO admin_form
VALUES (
        '',
        'Administateur',
        'admin@admin.ma',
        'Admin/123'
    );

SELECT * from admin_form;

-----------------------Data of Booking Rooms & Suit

--

-- Table `rooms`

--

drop table if EXISTS rooms;

CREATE
or
REPLACE
table
    rooms (
        id_heberg int AUTO_INCREMENT PRIMARY key,
        type_heberg varchar(50) not null,
        image_heberg varchar(100),
        name_heberg LONGTEXT,
        name_vue VARCHAR(50),
        disponible VARCHAR(20),
        max_personne int not NULL DEFAULT 5,
        prix DECIMAL(10, 2),
        nbr_lit int not null,
        type_lit LONGTEXT not NULL,
        surface varchar(50),
        CONSTRAINT check_dispo check(
            disponible = "dispo"
            or disponible = 'indispo'
        ),
        CONSTRAINT check_maxPers check(max_personne <= 5)
    ) AUTO_INCREMENT = 1;

--- Fill up Rooms

INSERT into
    rooms (
        type_heberg,
        image_heberg,
        name_heberg,
        name_vue,
        disponible,
        prix,
        nbr_lit,
        type_lit,
        surface
    )
VALUES (
        'Chambre',
        "jardin/chambre jardin.jpg",
        "Deluxe Chambre Vue Jardin - Un King lit",
        "Jardin",
        "dispo",
        2047,
        1,
        "chambre avec 1 King lit",
        "42-44"
    ), (
        'Chambre',
        "jardin/chambre-jardin2.jpg",
        "Deluxe Chambre Vue Jardin - Deux Queen lit",
        "Jardin",
        "indispo",
        2072,
        2,
        "chambre avec 2 queen lit",
        "42-44"
    ), (
        'Chambre',
        "jardin/chambre-familler.jpg",
        "Chambre Familiale avec Patio",
        "Jardin",
        "dispo",
        4500,
        3,
        "Chambre avec 1 king lit connecter avec chambre de 2 lits simple",
        "86"
    ), (
        'Chambre',
        "jardin/patio-view.jpg",
        "Chambre avec Patio",
        "Jardin",
        "dispo",
        3000,
        1,
        "chambre avec 1 queen lit",
        "42-44"
    ), (
        'Chambre',
        "piscine/patio-king-bed.jpg",
        "Chambre Familiale avec Patio",
        "Piscine",
        "indispo",
        4500,
        3,
        "Chambre avec 1 king lit connecter avec chambre de 2 lits simple",
        "86"
    ), (
        'Chambre',
        "piscine/patio-queen-bed.jpg",
        "Deluxe Chambre Vue Piscine avec Patio - un Queen lit",
        "Piscine",
        "dispo",
        3000,
        1,
        "chambre avec 1 queen lit ",
        "42-44"
    ), (
        'Chambre',
        "piscine/tow-simpl-bed.jpg",
        "Deluxe Chambre Vue Piscine avec Patio - Deux lits simple",
        "Piscine",
        "dispo",
        3500,
        2,
        "chambre avec 2 lits simple",
        "42-44"
    ), (
        'Chambre',
        "piscine/vue-picine2.jpg",
        "Deluxe Chambre Vue Piscine avec Patio",
        "Piscine",
        "dispo",
        3000,
        1,
        "chambre avec 1 queen lit",
        "42-44"
    ), (
        'Chambre',
        "piscine/vue-piscine.jpg",
        "Deluxe Chambre Vue Piscine",
        "Piscine",
        "dispo",
        2047,
        1,
        "chambre avec 1 queen lit",
        "42-44"
    ), (
        'Chambre',
        "ocean/ocean1.jpg",
        "Deluxe Chambre Vue océan - un Queen lit",
        "océan",
        "indispo",
        3500,
        1,
        "Chambre avec 1 Queen lit",
        "42-44"
    ), (
        'Chambre',
        "ocean/ocean2.jpg",
        "Deluxe Chambre Vue océan - Deux lits simple",
        "océan",
        "dispo",
        2000,
        2,
        "2 lits simple ",
        "42-44"
    ), (
        'Chambre',
        "ocean/ocean3.jpg",
        "Deluxe Chambre Vue océan - Deux queen lit",
        "océan",
        "dispo",
        2500,
        2,
        "Chambre avec 2 queen lit",
        "42-44"
    ), (
        'Chambre',
        "ocean/ocean4.jpg",
        "Deluxe Chambre Vue océan - Un queen lit",
        "océan",
        "dispo",
        1500,
        1,
        "Chambre avec 1 queen lit",
        "42-44"
    );

select * from rooms;

--

-- Table  `user_book`

--

drop table if EXISTS user_book;

CREATE
or
REPLACE
table
    user_book (
        id_userB int PRIMARY KEY AUTO_INCREMENT,
        id_heberg int,
        id_pack int default NULL,
        user_title char(5),
        first_name varchar(50) not null,
        last_name varchar(50) not null,
        email varchar(50) not null,
        residence VARCHAR(100) not null,
        tel int(20) not null,
        h_arrive TIME,
        date_arr date,
        CONSTRAINT check_userTitle check(
            user_title = "M."
            OR user_title = "Mme."
            OR user_title = "Mlle."
        )
    ) AUTO_INCREMENT = 1;


SELECT * from user_book;
SELECT id_userB from rooms INNER JOIN user_book on rooms.id_heberg = user_book.id_heberg WHERE rooms.id_heberg = 1;

drop TRIGGER if EXISTS addBook;
CREATE or REPLACE TRIGGER addBook AFTER INSERT ON user_book
        FOR EACH ROW
        BEGIN
            DECLARE id_user INT ;
            SELECT id_userB INTO id_user from rooms INNER JOIN user_book on rooms.id_heberg = user_book.id_heberg WHERE rooms.id_heberg = new.id_heberg;
            INSERT INTO book (id_userB,id_heberg,checkin,checkin_time,id_pack) VALUES (id_user,new.id_heberg,new.date_arr,new.h_arrive,new.id_pack);
        END;

select * from book;

SELECT * from user_book;

INSERT into user_book VALUES("",13,"M.",'jaala',"amini","jalal@gmail.com","fes","06457812","20:14","2023-04-01");

--

-- Table structure for table `book`

--

CREATE
or
REPLACE
TABLE
    book (
        book_id int(11) NOT NULL,
        id_pack int,
        id_userB int(11) NOT NULL,
        id_heberg int(11) NOT NULL,
        room_no int(5) NOT NULL,
        status varchar(20) default "En attente",
        days int(2) NOT NULL,
        checkin date NOT NULL,
        checkin_time time NOT NULL,
        checkout date NOT NULL,
        checkout_time time NOT NULL,
        total varchar(10) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

ALTER TABLE book ADD PRIMARY KEY (book_id);
ALTER TABLE book MODIFY book_id int(11) NOT NULL AUTO_INCREMENT;

COMMIT;

--

-- Table  `packs`

--

CREATE
or
REPLACE
TABLE
    pack(
        id_pack int PRIMARY key AUTO_INCREMENT,
        name_pack varchar(100) not null,
        price DECIMAL(10,2) not null 
    ) AUTO_INCREMENT = 1;

INSERT INTO pack (name_pack,price)
VALUES ("pack sportif",300), ('datente spa & yoga',600), ('summer',900), ('saint-valentin',750), ('ramadan',800), ('vacances en famille',1000);

select * from pack;

-----------------------Data of Activities

drop Table if exists activities ;










CREATE
or
REPLACE
table
    activities (
        id_activ int PRIMARY KEY AUTO_INCREMENT,
        titre_activ LONGTEXT,
        description LONGTEXT,
        image_activ VARCHAR(50)
    );

INSERT into
    activities (
        titre_activ,
        description,
        image_activ
    )
VALUES (
        'Kitesurf',
        "<span>
      Le kitesurf est un sport passionnant qui consiste à glisser sur l'eau en étant tracté par une aile de kite.
      Si vous êtes intéressé par cette activité, Nous offrons des cours de kitesurf pour tous les niveaux, que
      vous soyez débutant ou expérimenté. Notre équipe expérimentée est là pour vous aider et vous conseiller,
      que vous souhaitiez découvrir le sport, vous rafraîchir la mémoire ou améliorer vos compétences en
      kitesurf.
    </span>",
        "kitesurfing.jpg"
    ),(
        "Surf",
        "<span>
          Le surf est un sport de glisse sur une planche dans l'océan, utilisant
          les forces naturelles de l'eau pour surfer sur les vagues. Si vous êtes
          passionné de surf ou souhaitez découvrir ce sport, notre hôtel vous offre l'opportunité
          de vivre une expérience unique en expérimentant les vagues parfaites et peu fréquentées de Dakhla.
          Nous vous emmènerons au spot de surf Oum Labouir,
          idéal pour tous les surfeurs, débutants ou confirmés.
        </span>",
        "surfing.jpg"
    ),(
        "SUP",
        "<span>
          Le Stand-Up Paddle, communément appelé SUP, est un sport nautique
          où le pratiquant se tient debout sur une planche et se propulse à l'aide d'une pagaie.
          Il est accessible à tous les niveaux, que vous soyez débutant ou expérimenté.
          À Dakhla, nous proposons des locations de SUP ainsi que des excursions guidées pour découvrir les
          meilleurs spots de SUP de la région.
        </span>",
        "sup.jpg"
    ),(
        "Dune buggy",
        "<span>
            Découvrez les sensations fortes de la conduite de dune buggy dans les vastes étendues désertiques de
            Dakhla. Nous proposons des circuits de dune buggy pour les amateurs de sensations fortes. 
            Vous pourrez profiter pleinement de l'expérience de conduite tout en explorant les magnifiques paysages de la région. Nous offrons des
            circuits adaptés àtous les niveaux, des débutants aux conducteurs expérimentés.
        </span>",
        "buggy.jpg"

    );


-----------------------Data of Excursions

DROP Table of EXISTS excurions;

CREATE or REPLACE TABLE excursions (
  id_excur int AUTO_INCREMENT PRIMARY KEY,
  titre_excur LONGTEXT,
  description LONGTEXT,
  image_excur VARCHAR(50)
)AUTO_INCREMENT=1;


INSERT INTO excursions(titre_excur , description , image_excur) VALUES
(
  "Vivre avec les nomades",
  "<span>
      Découvrez l'authenticité du Sahara avec Les Dunes de Dakhla ! Profitez d'une expérience complète en
      séjournant dans une KHAIMA sahraouiya et dégustez les meilleurs produits locaux lors d'un repas
      traditionnel. Savourez également une cérémonie de thé HASSANI pour une immersion
      totale dans la culture locale.
    </span>",
    "nomade.jpg"

),(
  "Excursion à dos de chameau",
  "<span>
      Vivez une expérience unique en découvrant la vie des nomades à dos de chameau\,
      un moment inoubliable en compagnie de cette majestueuse bête symbole d'exotisme et de robustesse
    </span>",
    "camel.jpg"

),(
  "Excursion à la ville de Dakhla",
  "<span>
      Découvrez Dakhla et son marché local, où les tissus traditionnels
      et l'artisanat local ne manquent pas! Poursuivez avec un dîner en ville et
      terminez votre journée avec un jus d'orange frais ou un thé marocain dans un café local.
      N'oubliez pas de visiter le phare espagnol et le musée local pour une expérience complète.
    </span>",
    "ville.jpg"
),(
  "Découvrez l'ile du Dragon",
  "<span>
      Découvrez l'île légendaire du Dragon sur le lagon de Dakhla ! Cette île doit son
      nom à sa forme unique ressemblant à un dragon étendu. Embarquez pour une excursion en bateau
      ou en kayak et profitez d'une vue à couper le souffle depuis son sommet.
      Prévoyez des chaussures adaptées pour explorer les coquillages parsemés sur son terrain sauvage.
    </span>",
    "dragon.jpg"
),(
  "Stargazing",
  "<span>
      Observation des étoiles dans le désert de Dakhla : une expérience féerique à ne pas manquer !
      Grâce à l'absence de lumières urbaines, vous pourrez profiter d'un ciel étoilé des plus sombres
      et admirer des constellations spectaculaires.
      Les vastes espaces désertiques font des Dunes de Dakhla l'endroit idéal pour cette excursion
      magique.
  </span>",
  "stars.jpeg"
);

SELECT * FROM excursions;



SELECT *
              FROM book
              INNER JOIN user_book ON book.id_userB = user_book.id_userB
              INNER JOIN rooms ON book.id_heberg = rooms.id_heberg
              INNER JOIN pack ON user_book.id_pack = pack.id_pack

              WHERE `status` = 'En attente';


select * from user_book;