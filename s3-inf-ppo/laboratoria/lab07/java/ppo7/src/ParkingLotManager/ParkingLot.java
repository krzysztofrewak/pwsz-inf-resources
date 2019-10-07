package ParkingLotManager;

import ParkingLotManager.Entities.Car;
import ParkingLotManager.Interfaces.EntityInterface;

import java.util.ArrayList;

final public class ParkingLot {

    private ArrayList<EntityInterface> entitiesOnProperty = new ArrayList<>();
    private int carsOnProperty = 0;

    public boolean checkIfCanEnter(EntityInterface entity) {
        return entity.canEnter();
    }

    public void letIn(EntityInterface entity) {
        entitiesOnProperty.add(entity);
        Log.info(entity.identify() + " let in.");

        if(entity instanceof Car) {
            carsOnProperty++;
        }
    }

    public int countCars() {
        return carsOnProperty;
    }

}
