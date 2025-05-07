<?php

// Couleurs ANSI
$cyan = "\033[1;36m";
$orange = "\033[38;5;208m";
$green = "\033[1;32m";
$reset = "\033[0m";

// ASCII art stylisé du mot "M  i  n  i"
$logo = <<<ASCII
{$cyan}  

༼ つ ಥ_ಥ ༽つ    ༼ つ ಥ_ಥ ༽つ    ༼ つ ಥ_ಥ ༽つ    ༼ つ ಥ_ಥ ༽つ
                   _                        _
 __  __           | |                      (_)            
|  \/  |   ____  _| |_   _____      ___     _    ___        
| \  / |  |  __| \   _| |   _  \  /  _  \  | |  |    \   
| |\/| |  |  \    | |   |  (_) |  | | | |  | |  |  |  |
| |  | |  |  /_   | |_  |  |\  \  | |_| |  | |  |  |  |
|_|  |_|  |____|  \___| |__| \__| \_____/  |_|  |____/

  
༼ つ ಥ_ಥ ༽つ    ༼ つ ಥ_ಥ ༽つ    ༼ つ ಥ_ಥ ༽つ    ༼ つ ಥ_ಥ ༽つ

      {$orange}M  e   t   r   o   i   d   {$reset}
ASCII;

echo $logo . "\n";

// Instructions supplémentaires
echo "\n{$green}✅ Installation terminée avec succès !{$reset}\n";
echo "🚀 Pour lancer le serveur local : {$cyan}php -S localhost:8000 -t public{$reset}\n";
echo "📂 Structure de base créée : src/, config/, public/, views/\n";
echo "📂 Framework Metroid installé \n";
echo "🧠 Pour plus d'infos, consultez la documentation dans le README.md ou https://github.com/Corvaxx117/metroid-webapp\n";
