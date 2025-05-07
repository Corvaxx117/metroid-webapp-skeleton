<?php

// Couleurs ANSI
$cyan = "\033[1;36m";
$orange = "\033[38;5;208m";
$green = "\033[1;32m";
$reset = "\033[0m";

// ASCII art stylisé du mot "M  i  n  i"
$logo = <<<ASCII
{$cyan}
 __  __            _                        _            
|  \/  |          | |    _____      ___    (_)   ___        
| \  / |   ____  _| |_  |   _ \   /  _  \   _   |    \   
| |\/| |  |  __| \  __| |  (_)|   | | | |  | |  |  |  |
| |  | |  |  __|  | |_  |  |\  \  | |_| |  | |  |  |  |
|_|  |_|  |____|  \___| |__| \__| \_____/  |_|  |____/

  ______
༼ つ ಥ_ಥ ༽つ    ༼ つ ಥ_ಥ ༽つ    ༼ つ ಥ_ಥ ༽つ    ༼ つ ಥ_ಥ ༽つ

      {$orange}M   i   n   i{$reset}
ASCII;

echo $logo . "\n";

// Instructions supplémentaires
echo "\n{$green}✅ Installation terminée avec succès !{$reset}\n";
echo "🚀 Pour lancer le serveur local : {$cyan}php -S localhost:8000 -t public{$reset}\n";
echo "📂 Structure de base créée : src/, config/, public/, views/\n";
echo "🧠 Pour plus d'infos, consultez la documentation dans le README.md\n";
echo "📚 Documentation : https://github.com/Corvaxx117/metroid-webapp\n";
