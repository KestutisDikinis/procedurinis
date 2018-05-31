#include <fstream>
#include <vector>
#include <algorithm>
void pasukti(std::vector<char> &eile, int i);
int main(){
    char laik;
    std::vector<char> numb;
    std::ifstream ivesti("input.txt");
    for (int i = 0; ivesti >> laik; i++) {
        numb.push_back(laik);
    }
    ivesti.close();
    std::reverse(numb.begin(),numb.end());
    pasukti(numb, numb.size());
    std::ofstream isvestis("o.txt");
    for (char i:numb) {
        isvestis << i;
    }
    isvestis.close();
    return 0;
}
void pasukti(std::vector<char> &eile, int i){
    if (i > 1) {
        i--;
        eile.insert(eile.begin() + i, '\n');
        pasukti(eile, i);
    }
}