```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface PlaceholderInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Interfaces**
```uml
@startuml
interface PlaceholderInterface  #Lavender {
  + set(string $key, mixed $value, ...) : void
  + get(string $key) : mixed
  + exist(string $key) : bool
  + add(string $key, mixed $value, ...) : void
  + remove(string $key) : void
  + set_(string $key, mixed $value) : void
  + get_(string $key) : mixed
  + exist_(string $key) : bool
  + add_(string $key, mixed $value) : void
  + remove_(string $key) : void
  + set_h(string $key, mixed $value) : void
  + get_h(string $key) : mixed
  + exist_h(string $key) : bool
  + add_h(string $key, mixed $value) : void
  + remove_h(string $key) : void
  + setType(string $key, array $values) : void
  + clearType(string $key) : void
  + update(string $data, array $placeholder, ...) : string
  + update_(string $data) : string
  + keys(int $type, ?int $id = null) : array
}

note right of PlaceholderInterface::set
  Set content

  since: 3.2.0
  return: void
  
  arguments:
    string $key
    mixed $value
    bool $hash = true
end note

note left of PlaceholderInterface::get
  Get content by key

  since: 3.2.0
  return: mixed
end note

note right of PlaceholderInterface::exist
  Does key exist at all in any variation

  since: 3.2.0
  return: bool
end note

note left of PlaceholderInterface::add
  Add content

  since: 3.2.0
  return: void
  
  arguments:
    string $key
    mixed $value
    bool $hash = true
end note

note right of PlaceholderInterface::remove
  Remove content

  since: 3.2.0
  return: void
end note

note left of PlaceholderInterface::set_
  Set content with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: void
end note

note right of PlaceholderInterface::get_
  Get content with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: mixed
end note

note left of PlaceholderInterface::exist_
  Does key exist with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: bool
end note

note right of PlaceholderInterface::add_
  Add content with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: void
end note

note left of PlaceholderInterface::remove_
  Remove content with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: void
end note

note right of PlaceholderInterface::set_h
  Set content with # # # hash

  since: 3.2.0
  return: void
end note

note left of PlaceholderInterface::get_h
  Get content with # # # hash

  since: 3.2.0
  return: mixed
end note

note right of PlaceholderInterface::exist_h
  Does key exist with # # # hash

  since: 3.2.0
  return: bool
end note

note left of PlaceholderInterface::add_h
  Add content with # # # hash

  since: 3.2.0
  return: void
end note

note right of PlaceholderInterface::remove_h
  Remove content with # # # hash

  since: 3.2.0
  return: void
end note

note left of PlaceholderInterface::setType
  Set a type of placeholder with set of values

  since: 3.2.0
  return: void
end note

note right of PlaceholderInterface::clearType
  Remove a type of placeholder by main key

  since: 3.2.0
  return: void
end note

note left of PlaceholderInterface::update
  Update the data with the placeholders
THE ACTION OPTIONS ARE
1 -> Just replace (default)
2 -> Check if data string has placeholders
3 -> Remove placeholders not in data string

  since: 3.2.0
  return: string
  
  arguments:
    string $data
    array $placeholder
    int $action = 1
end note

note right of PlaceholderInterface::update_
  Update the data with the active placeholders

  since: 3.2.0
  return: string
end note

note left of PlaceholderInterface::keys
  return the placeholders for inserted and replaced code

  since: 3.2.0
  return: array
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

