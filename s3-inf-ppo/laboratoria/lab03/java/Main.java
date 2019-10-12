import java.util.Random;

class Point {

    public float x;
    public float y;

    public Point(float x, float y) {
        this.x = x;
        this.y = y;
        System.out.println("Point [" + x + ", " + y + "] has been created.");
    }

    public void movePoint(float xAxisShift, float yAxisShift) {
        this.x += xAxisShift;
        this.y += yAxisShift;
    }
}

class Circle {
    public Point center;
    public float radius;

    public Circle(Point center, float radius) {
        this.center = center;
        this.radius = radius;
    }

    public void printCoordinates() {
        System.out.println("x: " + this.center.x);
        System.out.println("y: " + this.center.y);
    }
}

public class Main {

    public static void main(String[] args) {
        float inputX = 0;
        float inputY = 0;
        float inputRadius = 5;

        Point point = new Point(inputX, inputY);
        Circle circle = new Circle(point, inputRadius);

        circle.center.movePoint(Main.getRandomNumber(), Main.getRandomNumber());
        circle.printCoordinates();
    }

    public static float getRandomNumber() {
        Random rand = new Random();
        return rand.nextInt(10);
    }

}