# Projektowanie i programowanie obiektowe, laboratorium 01

## Wprowadzenie do pracowni programowania obiektowego

### Plan zajęć
Przewidywany ogólny plan pierwszych zajęć laboratoryjnych:
* przedstawienie zasad zaliczenia przedmiotu:
  * należy oddać 11 list zadań (podzielonych na trzy moduły) + miniprojekt;
  * ocena końcowa to średnia ważona z ocen za zadania kończące moduły i miniprojekt: (M1 + M2 + M3 + 2*P) / 5;
  * plusy z aktywności podnoszą końcową ocenę;
  * nieoddane listy zadań obniżają końcową ocenę;
  * oceny można poprawić, ale otrzymana ocena niedostateczna wlicza się do końcowej oceny.
* przedstawienie planu tematów i zajęć na cały semestr:
  * laboratorium 1: Wprowadzenie do pracowni programowania obiektowego 	
  * laboratorium 2: Paradygmat obiektowy 	
  * laboratorium 3: Konstruktory i destruktory 	
  * laboratorium 4: Hermetyzacja i enkapsulacja 	
  * laboratorium 5: Dziedziczenie klas 	
  * laboratorium 6: Wielokrotne dziedziczenie klas 	
  * laboratorium 7: Interfejsy 	
  * laboratorium 8: Przeciążanie operatorów 	
  * laboratorium 9: Klasy i metody abstrakcyjne 	
  * laboratorium 10: Cechy 	
  * laboratorium 11: Refleksje
  * laboratoria 12-14: Praktyczne wykorzystanie programowania obiektowego
  * laboratorium 15: Podsumowanie semestru
* przedstawienie sugerowanej literatury przedmiotu;
* wprowadzenie do systemu kontroli wersji Git.

### System kontroli wersji
Należy utworzyć konto użytkownika na platformie [Github](http://github.com/) pod adresem studenckim. Jeżeli student już posiada konto, w ustawieniach profilu można dodać drugi adres. Prowadzący doda studentów do [organizacji uczelnianej](https://github.com/pwsz-legnica), przez którą będzie się odbywała realizacja zajęć i oddawanie list.

### Instrukcja korzystania z systemu kontroli wersji
 Należy sprawdzić czy Git jest zainstalowany w systemie: najlepiej uruchomić wybraną konsolę i wpisać:
```bash
git --version
```
Jeżeli nie jest zainstalowany, należy go zainstalować. Dla użytowników Windowsa wygodny będzie pakiet Laragon, który również przyda się na następnych zajęciach [dostępny tutaj](https://sourceforge.net/projects/laragon/files/releases/4.0/laragon-full.exe).

#### Inicjalizacja katalogu repozytorium:
Należy utworzyć katalog repozytorium:
```bash
cd /
mkdir ppo
cd ppo
mkdir 123456
cd 123456
```

Kolejne polecenia oznaczają:
```
przejdź do głównego katalogu
utwórz katalog o nazwie ppo
przejdź do katalogu o nazwie ppo
utwórz katalog o nazwie 123456 (tutaj dobrze wpisać swój numer indeksu)
przejdź do katalogu o nazwie 123456 (ponownie: indeks)
```

#### Inicjalizacja repozytorium:
Przed uruchomieniem można "sforkować" repozytorium prowadzącego przez interfejs Githuba: [https://github.com/krzysztofrewak/pwsz-inf-resources](https://github.com/krzysztofrewak/pwsz-inf-resources), a następnie wykonać następujące polecenia:

```bash
git init
git remote add origin https://github.com/krzysztofrewak/pwsz-inf-resources.git
git pull origin master
git status
```

Kolejne polecenia oznaczają:
```
oznacz folder jako repozytorium git
ustaw połączenie z serwerem (tutaj oczywiście warto wpisać własny adres)
ściąga dane z serwera
pokazuje stan repozytorium
```

#### Wprowadzanie zmian do repozytorium
Prawdopodobnie przy pierwszych zmianach będzie trzeba dodać poświadczenia uwierzytelniające:
```
git config user.name = "Student Studencki"
git config user.email = "student@example.com"
```

Warto podać swoje prawdziwe dane, aby Github później przyjął żadanie. Po jakiejkolwiek zmianie, dodaniu lub usunięciu pliku, należy zapisać swoje zmiany: 
```bash
git add .
git status
git commit -am "zmiany"
git push origin master
```

Kolejne polecenia oznaczają:
```
dodaje wszystkich niedodanych plików z katalogu "." do repozytorium
pokazuje stan repozytorium
tworzy commit o nazwie "zmiany"
przesyła commity na serwer
```

### Zadanie do wykonania
W repozytorium utworzonym przez prowadzącego proszę dodać:
* plik `readme.md` z podanym numerem indeksu oraz adresem mejlowym, imieniem i nazwiskiem studenta;
* katalog o nazwie `lab01` z plikiem `lab01.md`. Plik powinien zawierać listę komend potrzebnych do zainicjowania repozytorium, pobrania zmian z serwera oraz wgrania nowych zmian.

## Literatura
* Jerzy Grębosz, *Symfonia C++ Standard*, Wydawnictwo Edition 2000, 2008
* Robert C. Martin, *Czysty kod. Podręcznik dobrego programisty", Wydawnictwo Helion, 2010 