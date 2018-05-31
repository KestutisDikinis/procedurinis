#include <iostream>
#include <iomanip>
#include <fstream>
#include <climits>

void max(int n, int arr[], int *did){
    *did = 1;
    int maxx = INT_MIN;
    for (int i = 0; i < n; i++){
        if (arr[i] > maxx)
            maxx = arr[i];
    }
    *did = maxx;
}
void min(int n, int arr[], int *maz)
{
    *maz = 1;
    int minn = INT_MAX;
    for (int i = 0;i < n;i++){
        if (arr[i] < minn)
            minn = arr[i];
    }
    *maz = minn;
}
void avr(int n, int arr[], double *vidt){
    *vidt = 1.00;
    double sum = 0, avg = 0;
    for (int i = 0; i < n; i++){
        sum = sum + arr[i];
    }
    avg = sum / n;
    *vidt = avg;
}
int main(){
    int n, minn, maxx;
    double avg;
    int array[500];
    std::ifstream ivedimas;
    ivedimas.open("seka.txt");
    ivedimas >> n;
    for (int i = 0; i < n; i++){
        ivedimas >> array[i];
    }
    min(n, array, &minn);
    max(n, array, &maxx);
    avr(n, array, &avg);
    ivedimas.close();
    std::ofstream isvedimas;
    isvedimas.open("seka_rez.txt");
    isvedimas << minn << " " << maxx << " " << std::fixed << std::setprecision(2) << avg;
    isvedimas.close();
    return 0;
}