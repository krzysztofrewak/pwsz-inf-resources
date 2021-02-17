# Visual Programming
The main goal of the Visual Programming classes is to build the game. For this purpose, we will use the Phaser framework, which will allow us to easily implement any ideas. 

## Conditions for passing the course
### Designing and game development
Phaser is a desktop and mobile HTML5 game framework. It's fast, free and fun open source framework for Canvas and WebGL powered browser games. It consists of ready-made components like preloaders, physics, sprites, groups, animations, particles, camera, inputs, sounds, tilemaps, device scaling and plugin system. 

The best way to get familiar with Phaser is to read an official documentation here: http://phaser.io/tutorials/getting-started-phaser3 There you can find all instructions how to run simple webserver on any operating system. 

At some point you should be able to create simple "Hello World" application:

```html
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/phaser@3.15.1/dist/phaser-arcade-physics.min.js"></script> 
</head>
<body>

    <script>
    var config = {
        type: Phaser.AUTO,
        width: 800,
        height: 600,
        physics: {
            default: 'arcade',
            arcade: {
                gravity: { y: 200 }
            }
        },
        scene: {
            preload: preload,
            create: create
        }
    };

    var game = new Phaser.Game(config);

    function preload ()
    {
        this.load.setBaseURL('http://labs.phaser.io');

        this.load.image('sky', 'https://images.pexels.com/photos/912110/pexels-photo-912110.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
        this.load.image('logo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSZA5GIoxJsuwsNuvFd0fhvoD7TWtt6p3aNA&usqp=CAU');
        this.load.image('red', 'https://img.icons8.com/cotton/2x/like.png');
    }

    function create ()
    {
        this.add.image(400, 300, 'sky');

        var particles = this.add.particles('red');

        var emitter = particles.createEmitter({
            speed: 100,
            scale: { start: 1, end: 0 },
            blendMode: 'ADD'
        });

        var logo = this.physics.add.image(400, 100, 'logo');

        logo.setVelocity(100, 200);
        logo.setBounce(1, 1);
        logo.setCollideWorldBounds(true);

        emitter.startFollow(logo);
    }
    </script>

</body>
</html>
```

You can run it in your browser here: https://jsfiddle.net/qhovdebs/

Your main assignment is to create a nice playable game. There are a lot of examples here: http://phaser.io/examples You can also find multiple books, web tutorials, Youtube videos and other stuff online with step-by-step instructions. The sky is the limit.

### Sharing your code
Each student must create an account on the [GitHub](https://github.com/) platform. GitHub is a website for developers where you can publish your code. Registration form is available here: https://github.com/join - you should provide your unique username, email address and strong password.

After activating your account and signing in, you should be able to create a new repository here: https://github.com/new Repository is a place that contains all project files, including the revision history; it has unique name like `my-first-game`, an optional description and public level; for this course you should choose Public one.

Once you've created your repository, you'll be able to add your project files to it. There are multiple ways to do that: via GitHub.com panel, with a specialised IDE, with console Git agent and others. A part of this assignment is to choose the best one for you.

When your game will be complete, just send me a link to your public repository.

### Deploying the game online

You can use GitHub to deployment of your application. Just follow these steps:
* go to Settings page of your repository
* scroll down to GitHub Pages section
* choose a source of your page; it will be a 'main' branch probably
* and it's done! your website should be avaiable under the address https://yourgithubusername.github.io/yourprojectname

To achieve that, you need to have `index.html` file in you main directory of your repository. 
