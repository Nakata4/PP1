package repository;

import java.util.List;

import entities.EngineType;

public interface EngineTypeRepository extends JpaRepository<EngineType, Integer>{

	List<EngineType> findAll();

	EngineType findOne(Integer id);
}
