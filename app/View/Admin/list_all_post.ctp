<html>
    <body>


        <?php
        if ($posts == NULL) {
            echo "<h2>Dada Empty</h2>";
        } else {
            echo "<table>
          <tr>
            <td>id</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>Title</td>
          </tr>";
            foreach ($posts as $item) {
                echo "<tr>";
                echo "<td>" . $item['Post']['id'] . "</td>";
                echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
                echo "<td><a href='" . $this->webroot . "books/view/" . $item['Post']['id'] . "' >" . $item['Post']['title'] . "</a></td>";
                echo "</tr>";
            }
        }
        ?>
        <?php
        echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled')); //Shows the next and previous links
        echo " | " . $this->Paginator->numbers() . " | "; //Shows the page numbers
        echo $this->Paginator->next(' Next »', null, null, array('class' => 'disabled')); //Shows the next and previous links
        echo " Page " . $this->Paginator->counter(); // prints X of Y, where X is current page and Y is number of pages
        ?> 
    </body>
</html>