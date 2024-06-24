CREATE TABLE
    product (
        id INT PRIMARY KEY,
        name VARCHAR(255),
        description TEXT,
        image VARCHAR(255),
        price DECIMAL(10, 2),
        quantity INT,
        colors VARCHAR(255),
        size VARCHAR(50),
        category VARCHAR(50)
    );

CREATE TABLE
    newProduct (
        id INT PRIMARY KEY,
        name VARCHAR(255),
        description TEXT,
        image VARCHAR(255),
        price DECIMAL(10, 2),
        quantity INT,
        colors VARCHAR(255),
        size VARCHAR(50),
        category VARCHAR(50)
    );

INSERT INTO
    newProduct (
        id,
        name,
        description,
        image,
        price,
        quantity,
        colors,
        size,
        category
    )
VALUES
    (
        1,
        'V Jacket',
        'Lorem, ipsum dolor sit amet consectetur ...',
        './img/j3.jpeg',
        24.99,
        5,
        'Black,White',
        'M,L',
        'jacket'
    ),
    (
        2,
        'Black booth',
        'Lorem, ipsum dolor sit amet consectetur ...',
        './img/t11.jpeg',
        19.99,
        10,
        'Red,Blue,Green',
        'S,M,L',
        'tshirt'
    ),
    (
        3,
        'White dress',
        'Lorem, ipsum dolor sit amet consectetur ...',
        './images/dress/f.png',
        1599.00,
        5,
        'Black,White',
        'M,L',
        'dress'
    ),
    (
        4,
        'Dorze Gabi',
        'Lorem, ipsum dolor sit amet consectetur ...',
        './images/home/gabi2.png',
        2699.00,
        5,
        'Black,White',
        'M,L',
        'gabi'
    ),
    (
        5,
        'Ethio shirt',
        'Lorem, ipsum dolor sit amet consectetur ...',
        './images/home/eth6.png',
        699.00,
        20,
        'Yellow,Pink',
        'S,M',
        'tshirt'
    );

INSERT INTO
    product (
        id,
        name,
        description,
        image,
        price,
        quantity,
        colors,
        size,
        category
    )
VALUES
    (
        25,
        'Ethio Shirt',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/home/eth6.png',
        9.99,
        20,
        'Yellow,Pink',
        'S,M',
        'tshirt'
    ),
    (
        26,
        'Dorze',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/home/gabi2.png',
        1224.99,
        5,
        'Black,White',
        'M,L',
        'gabi'
    ),
    (
        27,
        'Neguse',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/home/gabi4.png',
        2244.99,
        5,
        'Red,Blue,Green',
        'S,M,L',
        'gabi'
    ),
    (
        28,
        'Gabi sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/home/gabi5.png',
        2984.99,
        5,
        'Black,White',
        'M,L',
        'gabi'
    ),
    (
        29,
        'Dorze sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/dress/f.png',
        2244.99,
        10,
        'Red,Blue,Green',
        'S,M,L',
        'dress'
    ),
    (
        30,
        'Neguse',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/dress/g.png',
        2244.99,
        5,
        'Black,White',
        'M,L',
        'dress'
    ),
    (
        31,
        'sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/dress/c.png',
        2244.99,
        5,
        'Black,White',
        'M,L',
        'dress'
    ),
    (
        32,
        'Dorze sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/dress/g.png',
        2984.99,
        5,
        'Black,White',
        'M,L',
        'dress'
    ),
    (
        33,
        'Ethio Dorze',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/dress/f.png',
        9.99,
        20,
        'Yellow,Pink',
        'S,M',
        'dress'
    ),
    (
        34,
        'Dorze',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/dress/j.png',
        1224.99,
        5,
        'Black,White',
        'M,L',
        'dress'
    ),
    (
        35,
        'Neguse',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/dress/p.png',
        1589.99,
        10,
        'Red,Blue,Green',
        'S,M,L',
        'dress'
    ),
    (
        36,
        'sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/dress/j.png',
        2244.99,
        5,
        'Black,White',
        'M,L',
        'dress'
    ),
    (
        37,
        'Dorze sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/dress/p.png',
        2984.99,
        5,
        'Black,White',
        'M,L',
        'dress'
    ),
    (
        38,
        'Neguse',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/dress/k.png',
        1589.99,
        10,
        'Red,Blue,Green',
        'S,M,L',
        'dress'
    ),
    (
        39,
        'sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/dress/j.png',
        2244.99,
        5,
        'Black,White',
        'M,L',
        'dress'
    ),
    (
        40,
        'Dorze sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/dress/f.png',
        2984.99,
        5,
        'Black,White',
        'M,L',
        'dress'
    ),
    (
        41,
        'Ethio Dorze',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/shirt/one.png',
        9.99,
        20,
        'Yellow,Pink',
        'S,M',
        'shirt'
    ),
    (
        42,
        'Dorze',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/shirt/three.png',
        1224.99,
        5,
        'Black,White',
        'M,L',
        'shirt'
    ),
    (
        43,
        'Neguse',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/shirt/three.png',
        2244.99,
        5,
        'Red,Blue,Green',
        'S,M,L',
        'shirt'
    ),
    (
        44,
        'sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/shirt/four.png',
        2984.99,
        5,
        'Black,White',
        'M,L',
        'shirt'
    ),
    (
        45,
        'Dorze sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/shirt/five.png',
        9.99,
        20,
        'Yellow,Pink',
        'S,M',
        'shirt'
    ),
    (
        46,
        'Ethio Dorze',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/shirt/six.png',
        1224.99,
        5,
        'Black,White',
        'M,L',
        'shirt'
    ),
    (
        47,
        'Dorze',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/shirt/seven.png',
        1589.99,
        10,
        'Red,Blue,Green',
        'S,M,L',
        'shirt'
    ),
    (
        48,
        'Neguse',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/shirt/eight.png',
        2244.99,
        5,
        'Black,White',
        'M,L',
        'shirt'
    ),
    (
        49,
        'sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/shirt/one.png',
        2984.99,
        5,
        'Black,White',
        'M,L',
        'shirt'
    ),
    (
        50,
        'Dorze sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/shirt/two.png',
        9.99,
        20,
        'Yellow,Pink',
        'S,M',
        'tshirt'
    ),
    (
        51,
        'Dorze',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/tshirt/three.png',
        1224.99,
        5,
        'Black,White',
        'M,L',
        'tshirt'
    ),
    (
        52,
        'Neguse',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/tshirt/four.png',
        1589.99,
        5,
        'Red,Blue,Green',
        'S,M,L',
        'tshirt'
    ),
    (
        53,
        'sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/tshirt/five.png',
        2244.99,
        5,
        'Black,White',
        'M,L',
        'tshirt'
    ),
    (
        54,
        'Dorze sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/tshirt/slx.png',
        2984.99,
        5,
        'Black,White',
        'M,L',
        'tshirt'
    ),
    (
        55,
        'Ethio Dorze',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/tshirt/six.png',
        9.99,
        20,
        'Yellow,Pink',
        'S,M',
        'tshirt'
    ),
    (
        56,
        'Dorze',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/tshirt/seven.png',
        1224.99,
        5,
        'Red,Blue,Green',
        'M,L',
        'tshirt'
    ),
    (
        57,
        'Neguse',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/tshirt/eight.png',
        1589.99,
        5,
        'Black,White',
        'M,L',
        'tshirt'
    ),
    (
        58,
        'sheba',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
',
        './images/home/gabi10.png',
        4524.99,
        5,
        'Black,White',
        'M,L',
        'gabi'
    );

    