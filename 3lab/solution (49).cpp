#include <iostream>
#include <fstream>
#include <vector>
void pasuktiMatr(std::vector<std::vector<int>> &matrica);
int main(){
    int a,b;
    std::fstream ivestis("15.txt");
    ivestis >> a >> b;
    std::vector<std::vector<int>> matrica(a,std::vector<int>(a));
    for(auto i = 0; i < a; i++)
    {
        for(auto j = 0; j < a; j++)
        {
            ivestis >> matrica[i][j];
        }
    }
    ivestis.close();
    while (b > 4) {
        b -= 4;
    }
    for ( auto i = 0; i < b; i++ )
    {
        pasuktiMatr(matrica);
    }
    std::ofstream isvedimas("15");
    for (int i = 0; i < a; i++)
    {
        isvedimas << std::endl;
        for (int j = 0; j < a; j++)
        {
            isvedimas << matrica[i][j] <<" ";
        }
    }
    isvedimas.close();
    return 0;
}
void pasuktiMatr(std::vector<std::vector<int>> &matrica){
    for ( int i = 0; i < matrica.size(); i++ )
    {
        for ( int j = i + 1; j < matrica.size(); j++ )
        {
            int temp = matrica[i][j];
            matrica[i][j] = matrica[j][i];
            matrica[j][i] = temp;
        }
    }
    for ( int i = 0; i < matrica.size(); i++ )
    {
        for ( int j = 0; j < matrica.size()/2; j++ )
        {
            int temp = matrica[i][j];
            matrica[i][j] = matrica[i][matrica.size()-1-j];
            matrica[i][matrica.size()-1-j] = temp;
        }
    }
}