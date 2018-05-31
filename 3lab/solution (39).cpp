#include <iostream>
#include <vector>
void NuskaitytiSeka(std::vector<int> &skaiciai);
void SurikiuotiElementus( std::vector<int> &skaiciai );
void SpausdintiRezultatuts ( std::vector<int> &skaiciai );
void sukeisti(int &a, int &b );
int main()
{
    std::vector<int>skaiciai;
    NuskaitytiSeka(skaiciai);
    SurikiuotiElementus(skaiciai);
    SpausdintiRezultatuts (skaiciai);
}
void NuskaitytiSeka(std::vector<int> &skaiciai)
{
    int a, temp;
    std::cin >> a;
    for ( auto i = 0 ; i < a ; i++ )
    {
        std::cin >> temp;
        skaiciai.push_back(temp);
    }
}
void sukeisti(int &a, int &b )
{
    int temp = a;
    a = b;
    b = temp;
}
void SurikiuotiElementus( std::vector<int> &skaiciai )
{
    bool sukeite;
    for ( auto i = 0 ; i < skaiciai.size() - 1; i++)
    {
        sukeite = false;
        for ( auto j = 0 ; j < skaiciai.size() - i - 1; j++)
        {
            if ( skaiciai[j] < skaiciai[j+1] )
            {
                sukeisti(skaiciai[j], skaiciai[j+1]);
                sukeite = true;
            }
        }
        if ( sukeite == false )
        {
            break;
        }
    }
}
void SpausdintiRezultatuts ( std::vector<int> &skaiciai )
{
    for ( auto i = 0 ; i < skaiciai.size() ; i++ ){
        std::cout << skaiciai[i] << " " ;
    }
}