```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface LoadInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Database**
```uml
@startuml
interface LoadInterface  #Lavender {
  + value(array $keys, string $field) : mixed
  + item(array $keys) : ?object
  + items(array $keys) : ?array
}

note right of LoadInterface::value
  Get a value from a given table
Example: $this->value(
[
'guid' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'
], 'value_key'
);

  since: 2.0.1
  return: mixed
end note

note right of LoadInterface::item
  Get values from a given table
Example: $this->item(
[
'guid' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'
]
);

  since: 2.0.1
  return: ?object
end note

note right of LoadInterface::items
  Get values from a given table
Example: $this->items(
[
'guid' => [
'operator' => 'IN',
'value' => [''xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'', ''xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'']
]
]
);
Example: $this->items($ids, 'table_name');

  since: 2.0.1
  return: ?array
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

