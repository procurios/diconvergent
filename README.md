# (Di|Con)vergent Mob Refactoring

For the C# version: https://github.com/procurios/diconvergent-csharp

## Before the workshop

We have little time and lot's to do. Please take the time to prepare beforehand, so we can all get the most out of the
workshop. If there are any issues or comments please contact us on Twitter or mail:

* Joop Lammerts, joop@procurios.eu, @jlammerts
* Pim Elshoff, pim@procurios.eu, @pelshoff

### Installation

Please clone this project and run the tests. If you have any issues, do not hesitate to contact us.

* Using Docker: (You need to sudo if your user is not part of dockerusers)
  - chmod +x install runtest
  - ./install
  - ./runtest
* Using composer:
  - composer install
  - vendor/bin/phpunit -c phpunit.xml.dist

### Preparation

One of the goals of this workshop is to test your **attitude**. Please think about and answer these following questions
to get a basic understanding. It doesn't have to be perfect and shouldn't take more than a couple of minutes.
Please note that "tend to" does not mean one or the other exclusively. Just go with the first choice that comes up for
you.

* At the start of a new project, I tend to
  - Think big and work out the general picture
  - Work out some details and start coding to get a better understanding
* While coding...
  - I only start coding when I see the bigger picture
  - I regularly throw code away and start over
* I can easily talk and type at the same time
  - disagree
  - agree
* When someone shares an idea with me, I tend to
  - See potential problems and risks
  - Get ideas of my own
* When I face an obstacle I tend to
  - sit down and get to the bottom of it
  - park it and work on something else for a bit

The more questions you have answered with the first answer, the more we think you tend to pessimism. In short we think
this means you tend to converge easier than diverge and that you tend to push on the brakes more than the gas.

The more questions have have answered with the second answer, the more we think you tend towards optimism. In short we
think this means you tend to diverge easier than converge and that you tend to push on the gas more than the brakes.

## During the workshop

We will divide you up into teams of four and hand out your assignments, preferably mixed nicely between optimists and
pessimists.

### Rules

- Be kind, considerate and respectful
- Listen; allow your peers space and time
- No one is required to "drive"/type

### The first hour

While it's ok with us if you decide to diverge from our suggestion, we suggest to work on the problems in four rounds
of ten minutes. Each round one of you codes, or "drives", while the others assist, or "navigate".

During the first hour, the goal is to diverge and explore. The script for drivers is as follows:

- You talk out loud about your ideas
- Code, code, code; do not be afraid to type and remove
- Don't dive in too much; focus on call-callee interaction and how it *feels*

The script for navigators is as follows:

- Hush; do not interrupt or distract the driver
- Share ideas between navigators using the provided post-its
- You may only interrupt the driver by softly saying "emergency break!"

### The second hour

The second hour will be a little bit different. There will still be only one driver, but this time the driver is only
allowed to type, not talk. If you have an idea that you'd like to be entered into code, *you must give up the keyboard*
and talk someone else through coding it. We suggest to switch driver at least once every 5 minutes, but encourage
switching more often.

During the second hour, the goal is to converge and choose. The script for drivers is as follows:

- Code
- Request to navigate if you want to choose

The script for navigators is as follows:

- Talk, but don't interrupt
- Keep it short; allow others to talk, too

Good luck!
