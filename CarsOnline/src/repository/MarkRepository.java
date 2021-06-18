package repository;

import java.util.List;

import entities.Mark;

public interface MarkRepository extends JpaRepository<Mark, Integer> {

	void save(Mark mark);

	Mark findOne(Integer id);

	List<Mark> findAll();
}
