#include <iostream>
#include <iomanip>

int main(){
    int n , m , ilgis , temp , a , b , laik;
    std::cin >>n;
    int *array = new int[n];
    for (int i = 0; i < n; i++){
        std::cin >> a;
        array[i] = a;
    }
    std::cin >> m;
    ilgis = m + n;
    int *pagrindinis = new int[ilgis];
    for (int i = n; i < ilgis; i++){
        std::cin >> b;
        pagrindinis[i] = b;
    }
    for (int i = 0; i < n; i++){
        pagrindinis[i] = array[i];
    }
    delete[] array;
    for (int i = 0; i < ilgis; i++){
        laik = i;
        for (int j = i + 1; j < ilgis; j++){
            if (pagrindinis[j] < pagrindinis[laik]){
                laik = j;
            }
        }
        temp = pagrindinis[laik];
        pagrindinis[laik] = pagrindinis[i];
        pagrindinis[i] = temp;
    }
    for (int i = 0; i < ilgis; i++){
        std::cout << pagrindinis[i] << " ";
    }
    return 0;
}