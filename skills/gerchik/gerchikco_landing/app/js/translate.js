var app = new Vue({
    el: '#translate',
    data: {
        /* Header */
        header_lang1: "",
        header_lang2: "",
        header_lang3: "",
        header_lang4: "",

        /* Banner */
        banner_lang1: "",
        banner_lang2: "",
        banner_lang3: "",
        banner_lang4: "",
        banner_lang5: "",

        /* Stats */
        stats_lang1: "",
        stats_lang2: "",
        stats_lang3: "",
        stats_lang4: "",
        stats_lang5: "",
        stats_lang6: "",

        /* Table */
        table_lang1: "",
        table_lang2: "",
        table_lang3: "",
        table_lang4: "",
        table_lang5: "",
        table_lang6: "",
        table_lang7: "",
        table_lang8: "",
        table_lang9: "",
        table_lang10: "",

        table_lang11: "",
        table_lang12: "",

        /* Bargain */
        bargain_lang1: "",
        bargain_lang2: "",
        bargain_lang3: "",

        /* Score */
        score_lang1: "",
        score_lang2: "",
        score_lang3: "",
        score_lang4: "",
        score_lang5: "",
        score_lang6: "",
        score_lang7: "",
        score_lang8: "",
        score_lang9: "",
        score_lang10: "",
        score_lang11: "",
        score_lang12: "",
        score_lang13: "",
        score_lang14: "",
        score_lang15: "",

        /* Control */
        control_lang1: "",
        control_lang2: "",
        control_lang3: "",
        control_lang4: "",
        control_lang5: "",
        control_lang6: "",
        control_lang7: "",

        /* Books */
        books_lang1: "",
        books_lang2: "",
        books_lang3: "",
        books_lang4: "",
        books_lang5: "",
        books_lang6: "",

        /* Advantages */
        advantages_lang1: "",
        advantages_lang2: "",
        advantages_lang3: "",
        advantages_lang4: "",
        advantages_lang5: "",

        /* Registration */
        registration_lang1: "",
        registration_lang2: "",
        registration_lang3: "",
        registration_lang4: "",
        registration_lang5: "",
        registration_lang6: "",
        registration_lang7: "",

        /* Footer */
        footer_lang1: "",
        footer_lang2: "",
        footer_lang3: "",
        footer_lang4: "",
        footer_lang5: "",
        footer_lang6: "",
        lang_active: "#ru"
    },
    created:function() {
        var hash = window.location.hash;

        switch(hash) {
            case "#ru":
                this.loadRu();
                break;
            case "#en":
                this.loadEn();
                break;
            default:
                this.loadRu();
        }
    },
    methods: {
        loadRu() {
            /* Header */
            this.header_lang1 = "Спреды";
            this.header_lang2 = "Счета";
            this.header_lang3 = "Сервисы";
            this.header_lang4 = "Открыть счёт";

            /* Banner */
            this.banner_lang1 = "УЗКИЕ СПРЕДЫ — <br>ШИРОКИЕ ВОЗМОЖНОСТИ.  <br>ТОРГУЙ ПРИБЫЛЬНО <br>В GERCHIK & CO!";
            this.banner_lang2 = "Открой счёт и получи полный набор сервисов <br>для успешной работы.";
            this.banner_lang3 = "Начни торговать прямо сейчас!";
            this.banner_lang4 = "или попробуй";
            this.banner_lang5 = "БЕСПЛАТНЫЙ ДЕМО-счёт";

            /* Stats */
            this.stats_lang1 = "спреды от";
            this.stats_lang2 = "торговых инструмента";
            this.stats_lang3 = "методов пополнения";
            this.stats_lang4 = "кредитное плечо";
            this.stats_lang5 = "от 0 мс";
            this.stats_lang6 = "скорость исполнения";

            /* Table */
            this.table_lang1 = "Валютные пары";
            this.table_lang2 = "Bid";
            this.table_lang3 = "Offer";
            this.table_lang4 = "Spread";
            this.table_lang5 = "Валютные пары";
            this.table_lang6 = "CFD на акции";
            this.table_lang7 = "Криптовалюты";
            this.table_lang8 = "Индексы";
            this.table_lang9 = "Сырьё";
            this.table_lang10 = "Металлы";

            this.table_lang11 = "НАЧНИ ТРЕЙДИНГ С ЛУЧШИМИ СПРЕДАМИ!";
            this.table_lang12 = "Gerchik & Co предоставляет широкий спектр инструментов  для трейдеров  и инвесторов: валютные пары, CFD на акции, сырьевые ресурсы и металлы.";

            /* Bargain */
            this.bargain_lang1 = "ВЫБЕРИ СТАРТ, КОТОРЫЙ ТЕБЕ ПОДХОДИТ, <br>И ТОРГУЙ НА СВОИХ УСЛОВИЯХ";
            this.bargain_lang2 = "Затраты на трейдинг снижены, чтобы ты смог повысить <br>доходы. Выбирай лучший торговый счет и получай <br>комплекс сервисов для стабильного заработка.";
            this.bargain_lang3 = "Подробнее";

            /* Score */
            this.score_lang1 = "Легкий старт для инвесторов";
            this.score_lang2 = "Начни свой путь к успеху прямо сейчас! Выбери управляющего  счетом или распредели средства между несколькими трейдерами, которые будут приносить тебе доход.";
            this.score_lang3 = "Mini";
            this.score_lang4 = "Идеально подходит для торговли малыми лотами. Наслаждайся быстрым исполнением ордеров и подключи комплекс сервисов для прибыльного трейдинга.";
            this.score_lang5 = "Simple";
            this.score_lang6 = "Разработан для тех, кто предпочитает торговлю на максимальной скорости. Торгуй с нулевыми спредами и подключай сервис «Статистика трейдера».";
            this.score_lang7 = "Silver";
            this.score_lang8 = "Создан для уверенного старта и комфортной торговли со сниженной комиссией. Открой для себя мир больших прибылей и наслаждайся мгновенным исполнением ордеров.";
            this.score_lang9 = "Gold";
            this.score_lang10 = "Для требовательных инвесторов и трейдеров. Торгуй прибыльно и экономь на комиссии. Воспользуйся полным комплексом услуг для высокодоходного трейдинга.";
            this.score_lang11 = "Platinum";
            this.score_lang12 = "Инновационные торговые инструменты и опыт успешных трейдеров. Получи лучшие условия для торговли без компромиссов.";
            this.score_lang13 = "Открыть счёт";
            this.score_lang14 = "ХИТ!";
            this.score_lang15 = "ТИПЫ СЧЕТОВ";

            /* Control */
            this.control_lang1 = "КОНТРОЛИРУЙ СИТУАЦИЮ";
            this.control_lang2 = "подключи и настрой Риск-менеджер";
            this.control_lang3 = "используй стоп лимит / стоп лосс / скользящий стоп";
            this.control_lang4 = "отфильтруй точки входа с помощью  Индикатора Real Market Volume";
            this.control_lang5 = "определи в Статистике трейдера удачные сделки и масштабируй их";
            this.control_lang6 = "Начни торговать прямо сейчас";
            this.control_lang7 = "СЕРВИСЫ";

            /* Books */
            this.books_lang1 = "Риск-менеджер";
            this.books_lang2 = "Полная защита от потерь депозита. Торгуй с минимальными рисками";
            this.books_lang3 = "Индикатор объёмов";
            this.books_lang4 = "Набирай позиции вместе с большими игроками.";
            this.books_lang5 = "Статистика трейдера";
            this.books_lang6 = "Анализируй торговлю, убери слабые места в своём трейдинге.";

            /* Advantages */
            this.advantages_lang1 = "ПОЧЕМУ РАБОТАТЬ С GERCHIK & CO ВЫГОДНО";
            this.advantages_lang2 = "Компания Gerchik & Co подключена к независимой системе мониторинга исполнения ордеров. Справедливость цен открытия и закрытия проверена экспертами международной Финансовой комиссии. Соответствие высшим стандартам подтверждено уникальным сертификатом. Отслеживай качество каждой сделки и будь уверен в выборе брокера. Получай лучшие цены на рынке.";
            this.advantages_lang3 = "Интересы клиентов защищены независимой Финансовой комиссией. Для решения споров могут привлекаться эксперты международного класса.  А компенсационный фонд достигает €20 000 на одну претензию. В FinaCom может обратиться каждый. Но за все время существования ни один трейдер из Gerchik & Co не подал претензию. Мы заботимся о качестве обслуживания клиентов. И предоставляем лучший сервис, а также прозрачные условия торговли.";
            this.advantages_lang4 = "Торгуй прибыльно с минимумом издержек! Тебя ждут нулевые спреды и низкие комиссии. Мгновенное исполнение ордеров по лучшим ценам на рынке. Гибкие условия ввода и вывода средств.  А также удобная платформа для быстрого доступа с любого устройства. Каждый клиент получает квалифицированную поддержку и комплекс сервисов для безубыточной торговли. Контролируй каждое движение средств на своем счете. Наращивай депозит — получай суперприбыль!";
            this.advantages_lang5 = "Открыть торговый счёт";

            /* Registration */
            this.registration_lang1 = "РЕГИСТРАЦИЯ НА <br>БЕСПЛАТНЫЙ ДЕМО-СЧЁТ";
            this.registration_lang2 = "ДЕМО-счёт — прекрасный способ поверить в себя, оттестировать свою торговую систему, откорректировать алгоритм трейдера, убедиться в преимуществах брокера! Компания Gerchik & CO гарантирует, что торговые условия на ДЕМО-счёте ничем не отличаются от торговых условий на реальном счёте.";
            this.registration_lang3 = "Имя";
            this.registration_lang4 = "E-mail";
            this.registration_lang5 = "Телефон";
            this.registration_lang6 = "Я согласен на обработку данных";
            this.registration_lang7 = "Открыть ДЕМО-счёт";

            /* Footer */
            this.footer_lang1 = "ЛИЦЕНЗИРОВАННЫЕ БРОКЕРСКИЕ КОМПАНИИ <br>Gerchik & CO Limited <br>Адрес: Corner Hutson & Eyre street, Blake Building, <br>Suite 302, Belize City, Belize <br>MAIL: support@gerchikco.com";
            this.footer_lang2 = "БЕСПЛАТНЫЕ ТЕЛЕФОННЫЕ ЛИНИИ: <br>Украина — 0 800 210 216 <br>Россия — 8 800 333 27 54 <br>Казахстан — +77-273-50-59-77* <br>Viber — +883510001243216** <br>";
            this.footer_lang3 = "*стоимость звонка согласно тарифов вашего оператора <br>**бесплатно с Viber";
            this.footer_lang4 = "ПРЕДУПРЕЖДЕНИЕ О РИСКАХ <br>Компания Gerchik & Co предупреждает: проведение торговых операций на <br>финансовых рынках с маржинальными финансовыми инструментами имеет <br>высокий уровень риска и может привести к получению убытков и потере <br>инвестиционных средств. Начиная торговлю,убедитесь, что вы в полной <br>мере осознаете все риски, а также обладаете соответствующими знаниями <br>и опытом для торговли на форекс.";
            this.footer_lang5 = "УСЛОВИЯ ПЕРЕПЕЧАТКИ МАТЕРИАЛОВ <br>При полном или частичном использовании информации <br>и материалов данного сайта, указание источника информации (ссылка на сайт <br>gerchikco.com) является обязательным. <br><br>Провайдер финансовых услуг J.B. Finance LLP 27 Old Gloucester Street, <br>London, United Kingdom, WC1N 3AX Gerchik & Co Copyright © 2015-2018";
            this.footer_lang6 = "Горячая линия";

            this.lang_active = "#ru";
        },
        loadEn() {
            /* Header */
            this.header_lang1 = "Spreads";
            this.header_lang2 = "Accounts";
            this.header_lang3 = "Services";
            this.header_lang4 = "Open an account";

            /* Banner */
            this.banner_lang1 = "NARROW SPREADS — <br>WIDE POSSIBILITIES.  <br>TRADE PROFITABLY <br>AT GERCHIK & CO!";
            this.banner_lang2 = "Open an account and get a full range of services <br>for successful trading.";
            this.banner_lang3 = "Start trading now!";
            this.banner_lang4 = "or try out";
            this.banner_lang5 = "FREE DEMO account";

            /* Stats */
            this.stats_lang1 = "spreads starting from";
            this.stats_lang2 = "trading instruments";
            this.stats_lang3 = "replenishment options";
            this.stats_lang4 = "leverage";
            this.stats_lang5 = "starting from 0 msec";
            this.stats_lang6 = "execution speed";

            /* Table */
            this.table_lang1 = "Currency pairs";
            this.table_lang2 = "Bid";
            this.table_lang3 = "Offer";
            this.table_lang4 = "Spread";
            this.table_lang5 = "Currency pairs";
            this.table_lang6 = "CFDs on stock";
            this.table_lang7 = "Cryptocurrencies";
            this.table_lang8 = "Indices";
            this.table_lang9 = "Raw materials";
            this.table_lang10 = "Metals";

            this.table_lang11 = "START TRADING WITH THE BEST SPREADS!";
            this.table_lang12 = "Gerchik & Co offers a wide range of instruments for the traders and the investors. These include currency pairs, CFDs on stock, raw materials and metals.";

            /* Bargain */
            this.bargain_lang1 = "PICK THE START WHICH MEETS YOUR NEEDS <br>AND TRADE ON YOUR TERMS";
            this.bargain_lang2 = "We have reduced trading cost so that you could increase your profit. Choose the best trading account and get a full range of services for stable income.";
            this.bargain_lang3 = "Learn more";

            /* Score */
            this.score_lang1 = "Effortless start for investors";
            this.score_lang2 = "Take the first step toward success now! Pick the suitable account manager or distribute the funds between several traders who will generate profit for you.";
            this.score_lang3 = "Mini";
            this.score_lang4 = "This account type is ideally suited for trading small lots. Enjoy prompt order execution and get a package of services for profitable trading.";
            this.score_lang5 = "Simple";
            this.score_lang6 = "This account type is designed for those who prefer fast-paced trading style. Trade with zero spreads and enable Trader’s Statistics, a service brought to you by Gerchik & Co!";
            this.score_lang7 = "Silver";
            this.score_lang8 = "It is designed for confident start and comfortable trading with reduced commission fees. Discover the world of big profit and enjoy instantaneous order execution!";
            this.score_lang9 = "Gold";
            this.score_lang10 = "This account type will meet the expectations of the most demanding investors and traders. Trade profitably while saving on commission fees! Use the full range of services for highly-profitable trading.";
            this.score_lang11 = "Platinum";
            this.score_lang12 = "Innovative trading tools and experience of successful traders. Get the best trading terms!";
            this.score_lang13 = "Open an account";
            this.score_lang14 = "HIT!";
            this.score_lang15 = "ACCOUNT TYPES";

            /* Control */
            this.control_lang1 = "BE IN CONTROL OVER THE SITUATION";
            this.control_lang2 = "enable and set up Risk Manager ";
            this.control_lang3 = "use stop limit / stop loss / trailing stop orders";
            this.control_lang4 = "filter off entry points using Real Market Volume indicator";
            this.control_lang5 = "identify successful trades in Trader’s Statistics and scale them up";
            this.control_lang6 = "Start trading now";
            this.control_lang7 = "SERVICES";

            /* Books */
            this.books_lang1 = "Risk Manager";
            this.books_lang2 = "Full protection against deposit loss. Trade with minimum risks";
            this.books_lang3 = "Real Market Volume Indicator";
            this.books_lang4 = "Accumulate positions alongside the big players.";
            this.books_lang5 = "Trader’s Statistics";
            this.books_lang6 = "Analyze the trades and get rid of the shortcomings in your trading.";

            /* Advantages */
            this.advantages_lang1 = "WHY TRADING WITH GERCHIK & CO IS PROFITABLE";
            this.advantages_lang2 = "Gerchik & Co is connected to order execution independent monitoring system. Fairness of opening and closing prices is verified by the expert of International Financial Commission. Compliance with the highest standards is confirmed by unique certificate. Check the quality of each trade and be sure that you chose a truly reliable broker! Get the best market prices.";
            this.advantages_lang3 = "Our clients’ interests are protected by independent Financial Commission. To settle the disputes, the world-class experts can be engaged, with indemnification fund reaching up to €20 000 per claim. Any person shall have the right to appeal to FinaCom. However, over the course of our operation, not a single trader at Gerchik & Co has filed a claim. We care about the quality of our customer care, and make sure we provide the best services along with transparent trading terms!";
            this.advantages_lang4 = "Trade profitably with minimum costs! We offer zero spreads and low commission fees. Instantaneous order execution at the best market prices. Flexible funds deposit and withdrawal terms. User-friendly platform enabling easy access from any device. Every customer is provided with excellent expert support and full range of services for the loss-free trading. Control the flow of funds on your account! Increase your deposit and make super profit!";
            this.advantages_lang5 = "Open trading account";

            /* Registration */
            this.registration_lang1 = "REGISTRATION FOR <br>FREE DEMO ACCOUNT";
            this.registration_lang2 = "DEMO account offers an excellent chance to believe in yourself, test out the trading strategy, adjust trader’s algorithm and see all of the broker’s advantages for yourself! Gerchik & Co guarantees that the DEMO account trading terms are no different from the trading terms of the real (live) account.";
            this.registration_lang3 = "Name";
            this.registration_lang4 = "E-mail";
            this.registration_lang5 = "Phone number";
            this.registration_lang6 = "I hereby give my consent to processing of my personal data";
            this.registration_lang7 = "Open DEMO account";

            /* Footer */
            this.footer_lang1 = "LICENSED BROKERAGE FIRMS <br>Gerchik & CO Limited <br>Address: Corner Hutson & Eyre street, Blake Building, <br>Suite 302, Belize City, Belize <br>Email: support@gerchikco.com  ";
            this.footer_lang2 = "FREE TELEPHONE LINES: <br>Ukraine — 0 800 210 216 <br>Russia — 8 800 333 27 54 <br>Kazakhstan — +77-273-50-59-77* <br>Viber — +883510001243216**";
            this.footer_lang3 = "* charges for the calls depend on the call tariffs of your phone operator <br>** free calls from Viber";
            this.footer_lang4 = "RISK WARNING <br>Gerchik & Co company warns you: performing trading operations within <br>stock markets with marginal financial tools holds high level of risks, <br>and can lead to getting negative income and to investment losses. <br>Prior to starting the trading process, please, make sure that you fully <br>acknowledge all possible risks and also have relevant knowledge and <br>experience for trading at forex.";
            this.footer_lang5 = "MATERIAL REPRINTING CONDITIONS <br>It is compulsory to state the information <br>source (direct link to gerchikco.com) when reprinting materials in full or partially from this website. <br><br>Financial services provider J.B. Finance LLP 27 Old Gloucester Street, <br>London, United Kingdom, WC1N 3AX Gerchik & Co Copyright © 2015-2018";
            this.footer_lang6 = "Hot line";

            this.lang_active = "#en";
        }
    }
})