package beans;

import com.kraskovskij.car_shop.entities.Mark;
import com.kraskovskij.car_shop.service.interfaces.MarkService;
import java.util.List;


public class MarkBean {

    MarkService markService;

    private List<Mark> allMarks;

    public void init(){
        allMarks = markService.getAllMarks();
    }
    public List<Mark> getAllMarks() {
        return allMarks;
    }
}
