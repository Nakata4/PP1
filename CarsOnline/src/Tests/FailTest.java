package Tests;

import org.junit.Test;

import java.util.Arrays;
import java.util.List;

import static org.junit.Assert.assertEquals;
import static org.junit.Assert.assertTrue;

public class FailTest {
    private final List<Integer> numbers = Arrays.asList(3, 1, 7, 1, 5, 9);

    @Test
    public void checkProperties() {
        assertTrue(numbers.stream().allMatch(n -> n % 2 == 1));
    }

    @Test
    public void checkCars() {
        assertEquals(6, numbers.size());
    }
}
