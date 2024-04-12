```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface InsertInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Interfaces\Database**
```uml
@startuml
interface InsertInterface  #Lavender {
  + value(mixed $value, string $field, ...) : bool
  + row(array $item) : bool
  + rows(?array $items) : bool
  + item(object $item) : bool
  + items(?array $items) : bool
}

note right of InsertInterface::value
  Insert a value to a given table
Example: $this->value(Value, 'value_key', 'GUID');

  since: 3.2.0
  return: bool
  
  arguments:
    mixed $value
    string $field
    string $keyValue
    string $key = 'guid'
end note

note right of InsertInterface::row
  Insert single row with multiple values to a given table
Example: $this->item(Array);

  since: 3.2.0
  return: bool
end note

note right of InsertInterface::rows
  Insert multiple rows to a given table
Example: $this->items(Array);

  since: 3.2.0
  return: bool
end note

note right of InsertInterface::item
  Insert single item with multiple values to a given table
Example: $this->item(Object);

  since: 3.2.0
  return: bool
end note

note right of InsertInterface::items
  Insert multiple items to a given table
Example: $this->items(Array);

  since: 3.2.0
  return: bool
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

