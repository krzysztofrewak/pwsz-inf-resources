## Zadanie rekrutacyjne

Należy zaprojektować i zaimplementować automat sprzedający napoje, tzw. vending machine.
Projekt może zostać oddany w formie aplikacji okienkowej, webowej lub konsolowej, w dowolnym języku programowania.
Żadna technologia nie będzie premiowana, liczy się jakość kodu, poprawność i pomysłowość.
Premiowane natomiast będzie podejście obiektowe (w językach i technologiach, które podejście obiektowe umożliwiają)

Automat posiada N produktów, które można zakupić (minimalny zestaw danych opisujących produkt to: Nazwa produktu, Cena)
Automat prezentuje produkty, które można zakupić, oraz ich ceny.
Przed zakupieniem produktu należy wrzucić do automatu odpowiednią ilość pieniędzy. Po wrzuceniu wymaganej kwoty można zakupić produkt. Po zakupieniu produktu automat wydaje resztę. 
Transakcję można anulować przed zakupieniem produktu, wrzucone do automatu pieniądze zostają wtedy w całości zwrócone.

Aplikacja powinna posiadać interfejs użytkownika (właściwy dla wybranej technologii), informujący użytkownika o tym co się dzieje i jakie akcje może wykonać.

Minimalny zestaw funkcjonalności (wymagany do uznania dostarczonego zadania za ukończone):
* lista produktów
* wrzucanie pieniędzy
* wybór produktu (zakup)
* wydawanie reszty
* anulowanie zakupu i zwrot środków

Mile widziane funkcjonalności:
* Przyjmowanie tylko monet w nominałach dostępnych w Polsce
* Przechowywanie ilości produktów i blokada sprzedaży gdy danego produktu  zabraknie.
* Zwracanie reszty tylko w nominałach dostępnych w Polsce (czyli np. zamiast pisać "automat zwrócił 30gr" napisać "automat zwrócił monety: 20gr i 10gr")

Powyższa lista nie wyczerpuje wszystkich rzeczy jakie można wprowadzić. 
